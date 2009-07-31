<?php
	/**
	 * pChartWebservice.php
	 * Webservice to generate charts using pChart
	 * written by Robert Horlings
	 * http://www.mediawiki.org/wiki/Extension:pChart4mw
	 *
	 */

 	// Include library functions
	require_once( "library.inc.php" );

	//
	// Default parameters
	//
	
	// Image format to save the charts. Can be 'png', 'jpeg' or 'gif'
	$wgPChart4mwImageFormat = "png"; 		  
	
	// Flag whether the built-in cache should be used. Using the cache the
	// system will only create each chart once and save it to disk. If no 
	// changes are detected, the image that is already created will be used
	$wgPChart4mwCacheEnabled = true;

	// Directory to save generated charts to. It must be relative to the document
	// root. This directory must exist and be writable. If it  does not, the 
	// system will attempt to create it.
	$wgPChart4mwCacheDir 	= "/wiki/images/pChart4mw";
	
	// Path where PChart is installed. This directory must contain a subdirectory
	// Fonts with truetype fonts installed
	$wgPChart4mwPChartPath	= $_SERVER[ "DOCUMENT_ROOT" ] . "/pchart/pChart";

	// Font that is used for writing text into the charts.
	// This variable contains the path and filename that directs to the TTF-file
	$wgPChart4mwFont		= $wgPChart4mwPChartPath . "/Fonts/Tahoma.ttf";
	
	// Fontsize that is used for writing text into the charts.
	$wgPChart4mwFontSize	= 8;

	// Fontsize that is used for writing title into the charts.
	$wgPChart4mwTitleSize	= 10;
	
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

	// Make sure classes can be loaded
	function __autoload( $class_name ) {
		global $wgAutoloadClasses;
		
		if( array_key_exists( $class_name, $wgAutoloadClasses ) ) {
			require_once( $wgAutoloadClasses[ $class_name ] );
		} else {
			return false;
		}
	}
	
	// Analyze the type, data and arguments
	if( array_key_exists( "_type", $_REQUEST ) ) {
		$type = $_REQUEST[ "_type" ];
	} else {
		$type = "bars";
	}
	if( array_key_exists( "_data", $_REQUEST ) ) {
		$data = $_REQUEST[ "_data" ];
	} else {
		$data = "";
	}
	
	// Create chart object
	switch( $type ) {
		case "bars":	$pChart = new pChart4mwBars(); break;
		case "lines":	$pChart = new pChart4mwLines(); break;
		case "radar":	$pChart = new pChart4mwRadar(); break;
		case "pie":		$pChart = new pChart4mwPie(); break;
		case "scatter":	$pChart = new pChart4mwScatter(); break;
		case "bubble":	$pChart = new pChart4mwBubble(); break;
		default:		$pChart = new pChart4mwBars(); break;
	}
	
	// Parse the data and get all arguments into an array
	$data = str_replace( "|", "\n", $data );
	$args = $_REQUEST;

	// Show the chart
	$pChart->showChart( $data, $args );
?>