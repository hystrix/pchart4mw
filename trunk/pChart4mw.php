<?php
	/**
	 * pChart4mw.php
	 * provide tags for drawing charts easily using pChart.
	 * written by Robert Horlings
	 * http://www.mediawiki.org/wiki/Extension:pChart4mw
	 *
	 * To configure the functionality of this extension include the following in your
	 * LocalSettings.php file:
	 *
	 * $wgPChart4mwDefaults = Array ( "size" => "200x120" );
	 * $wgPChart4mwLinesDefaults = Array ( "grid" => "xy", "ymin" => "0", "ylabel" => "4");
	 * $wgPChart4mwBarsDefaults = Array ( "grid" => "y", "ymin" => "0", "ylabel" => "4" );
	 * $wgPChart4mwPieDefaults = Array ( "3d" => "3d" );
	 
	 * require_once( "$IP/extensions/pChart4mw/pChart4mw.php" );
	 */

	// Include library functions
	require_once( "library.inc.php" );
	 
	// Check whether this extension runs standalone or within MEDIAWIKI
	if(! defined( "MEDIAWIKI" ) ) {
		echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
		die( -1 );
	}

	// Register this extension on the Special:Version page for showing credits
	$wgExtensionCredits["parserhook"][] = array(
		"name" 			=> "pChart4mw",
		"version"		=> "1.0.6",
		"author" 		=> "Robert Horlings", 
		"url" 			=> "http://www.mediawiki.org/wiki/Extension:Pchart4mw",
		"description" 	=> "Provides tags for creating different types of pChart graphs: bar, line, pie, radar, scatter and bubble charts."
	);
	
	//
	// Default parameters
	//
	
	// Image format to save the charts. Can be 'png', 'jpeg' or 'gif'
	$wgPChart4mwImageFormat = "png"; 		  
	
	// Flag whether the built-in cache should be used. Using the cache the
	// system will only create each chart once and save it to disk. If no 
	// changes are detected, the image that is already created will be used
	$wgPChart4mwCacheEnabled= true;

	// Directory within the $wgUploadPath directory ([wiki]/images) to save 
	// generated charts to. This directory must exist and be writable. If it 
	// does not, the system will attempt to create it.
	//
	// Even when cache is disabled, the directory must still exist. Images are saved
	// to that directory to show them in wiki pages
	$wgPChart4mwCacheDir 	= "pChart4mw";
	
	// Set this value to some location if you want the charts to be generated on 
	// another server. In that case, the pChart4mw should be installed on that 
	// server. If this parameter is left empty, the images are created on the local machine
	//
	// When using the webservice, most parameters set in this file do not have any effect.
	// The parameters should be set in the webservice file itself.
	//
	// The webservice should accept a parameter called _data. This parameter contains all
	// data to generate the chart. Newlines are converted to literal '|', in order to get
	// all data on one line. Another parameter is _type. It contains the type of chart
	// to be generated. All other arguments are given by [key]=[value] pairs
	// The webservice is called using a GET request
	//
	// Example: $wgPChart4mwWebservice	= "http://localhost/external/pChartWebservice.php";
	// 			$wgPChart4mwWebservice	= "http://localhost:8000/wiki/extensions/pChart4mw/pChartWebservice.php";
	$wgPChart4mwWebservice	= "";
	
	// Absolute path where PChart is installed (only the dirname). Use $_SERVER[ "DOCUMENT_ROOT" ] 
	// to retrieve the absolute path to the document root and dirname ( __FILE__ ) for the 
	// absolute path to the directory where this file is.	
	//$wgPChart4mwPChartPath	= $_SERVER[ "DOCUMENT_ROOT" ] . "/pchart/pChart";
	$wgPChart4mwPChartPath	= dirname( __FILE__) . "/pChart";

	// Absolute path to the font that is used for writing text into the charts.
	// This variable contains the path and filename that directs to the TTF-file
	$wgPChart4mwFont		= $wgPChart4mwPChartPath . "/Fonts/Tahoma.ttf";
	
	// Fontsize that is used for writing text into the charts.
	// This fontsize is overridden by the value $chartArgs[ "textsize" ] in the getDefaultArgs() method
	$wgPChart4mwFontSize	= 8;
	
	// Directory containing the color schemes. These color schemes are text files with 
	// a color on each line. Every color is a comma-separated RGB color. An example is
	//
	// 0,0,0
	// 51,51,51
	// 102,102,102
	// 153,153,153
	// 204,204,204
	// 255,255,255
	//
	$wgPChart4mwDefaultColorSchemeDir = dirname( __FILE__ ) . "/colorschemes";

	// Register the wfPChart4mwSetup function as setup function 
	// Avoid unstubbing $wgParser too early on modern (1.12+) MW versions, as per r35980
	if ( defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
		$wgHooks['ParserFirstCallInit'][] = 'wfPChart4mwSetup';
	} else {
		$wgExtensionFunctions[] = 'wfPChart4mwSetup';
	}
	
	// Make sure classes for pChart4mw and pChart itself can be loaded.
	$currentDir = dirname(__FILE__);
	$wgAutoloadClasses[ 'pChart' ] 			= $wgPChart4mwPChartPath . '/pChart.class';
	$wgAutoloadClasses[ 'pChart4mw' ] 		= $currentDir . '/pChart4mw.class.php';
	$wgAutoloadClasses[ 'pChart4mwBars' ] 	= $currentDir . '/pChart4mw.bars.class.php';
	$wgAutoloadClasses[ 'pChart4mwLines' ] 	= $currentDir . '/pChart4mw.lines.class.php';
	$wgAutoloadClasses[ 'pChart4mwRadar' ] 	= $currentDir . '/pChart4mw.radar.class.php';
	$wgAutoloadClasses[ 'pChart4mwPie' ] 	= $currentDir . '/pChart4mw.pie.class.php';
	$wgAutoloadClasses[ 'pChart4mwScatter' ] 	= $currentDir . '/pChart4mw.scatter.class.php';
	$wgAutoloadClasses[ 'pChart4mwBubble' ] 	= $currentDir . '/pChart4mw.bubble.class.php';
	
	// Registers some functions to be run when pBars tag is found
	function wfPChart4mwSetup() {
		global $wgParser, $wgPChart4mwWebservice;
		
		// Create the charts on the local machine
		$wgParser->setHook( 'pBars', 	array( 'pChart4mwBars', 'render' ) );
		$wgParser->setHook( 'pLines', 	array( 'pChart4mwLines', 'render' ) );
		$wgParser->setHook( 'pRadar', 	array( 'pChart4mwRadar', 'render' ) );
		$wgParser->setHook( 'pPie', 	array( 'pChart4mwPie', 'render' ) );
		$wgParser->setHook( 'pScatter', array( 'pChart4mwScatter', 'render' ) );
		$wgParser->setHook( 'pBubble', 	array( 'pChart4mwBubble', 'render' ) );
		
		return true;
	}
?>