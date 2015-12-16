pChart4mw is released under the [GNU General Public License v3.0](http://www.gnu.org/licenses/gpl.html)

### <font color='Green'> Current version</font> ###

<font color='#7B7B7B' size='2'><b>Version 1.4.0 May 12</b><sup>th</sup> 2012**(current version)</font>**<br>
<ul><li>Added: Parameters <a href='Parameters#Threshold.md'>threshold and thcolor</a>
</li><li>Minor technical fix: deprecated PHP function split() removed<br>
</li><li>pchart4mw version 1.4.0 was build with pChart library version 1.27d and PHP version 5.2<br>
</li><li>Download pchart4mw: <a href='http://pchart4mw.googlecode.com/files/pChart4mw%20v1.4.0.zip'>pChart4mw v1.4.0.zip</a></li></ul>

<h3><font color='Red'><b>Archived versions</b></font></h3>

<font color='#7B7B7B' size='2'><b>Version 1.3.3 July 21</b><sup>th</sup> 2011<b>(current version)</font></b><br>
<ul><li>Minor technical fix: Main module uses parser object instead of global<br>
</li><li>Added: Font Forgotte.ttf now part of standard distribution<br>
</li><li>pchart4mw version 1.3.3 was build with pChart library version 1.27d and PHP version 5.2<br>
</li><li>Download pchart4mw: <a href='http://pchart4mw.googlecode.com/files/pChart4mw%20v1.3.3.zip'>pChart4mw v1.3.3.zip</a> <font color='#7B7B7B' size='1'>(deprecated)</font></li></ul>

<font color='#7B7B7B' size='2'><b>Version 1.3.2 July 15</b><sup>th</sup> 2011<b></font></b><br>
<ul><li>Minor technical fix: Removed trailing ?> characters from all php code files<br>
</li><li>pchart4mw version 1.3.2 was build with pChart library version 1.27d and PHP version 5.2<br>
</li><li>Download pchart4mw: <a href='http://pchart4mw.googlecode.com/files/pChart4mw%20v1.3.2.zip'>pChart4mw v1.3.2.zip</a> <font color='#7B7B7B' size='1'>(deprecated)</font></li></ul>

<font color='#7B7B7B' size='2'><b>Version 1.3.1 July 13</b><sup>th</sup> 2011<b></font></b><br>
<ul><li>Functional fix: Line chart parameter 'filled' now also working with standard non-cubic lines<br>
</li><li>Download pchart4mw: <a href='http://pchart4mw.googlecode.com/files/pChart4mw%20v1.3.1.zip'>pChart4mw v1.3.1.zip</a> <font color='#7B7B7B' size='1'>(deprecated)</font></li></ul>

<font color='#7B7B7B' size='2'><b>Version 1.3.0 December 24</b><sup>th</sup> 2010<b></font></b><br>
<ul><li>Added new features: textfont, textsize, titlefont and titlesize parameters, see <a href='Fonts.md'>fonts...</a>
</li><li>Removed globals $wgPChart4mwFont and $wgPChart4mwFontSize<br>
</li><li>Added global $wgPChart4mwFontPath absolute path to the fonts folder<br>
</li><li>Included pChart (version 1.27d) library files in the distribution for ease of installation and configuration<br>
</li><li>Moved the fonts folder under pChart4mw extensions root: ..\pChart4mw\fonts<br>
</li><li>When upgrading from a previous version of pChart4mw:<br>
<ul><li>Take note of the changed folder structure of pChart4mw<br>
</li><li>Take note of needed localsettings.php changes (remove old globals)<br>
</li><li>Best apporach is to completely remove the old version of pChart4mw and install this new version. (make sure to save your custom colorschemes and fonts if you have them)<br>
</li></ul></li><li>The default font for pChart4mw is tahoma.ttf. Set your preffered font in localsettings.php using $wgPChart4mwDefaults for example:<br>
<ul><li>$wgPChart4mwDefaults = Array ( "textfont" => "myfont.ttf", "textsize" => "5" );<br>
</li></ul></li><li>pchart4mw version 1.3.o was build with pChart library version 1.27d and PHP version 5.2<br>
</li><li>Download pchart4mw: <a href='http://pchart4mw.googlecode.com/files/pChart4mw%20v1.3.0.zip'>pChart4mw v1.3.0.zip</a> <font color='#7B7B7B' size='1'>(deprecated)</font></li></ul>

<h3><font color='Red'><b>Older archived versions</b></font></h3>
For older archived versions see: <a href='Archive.md'>Old Archive</a>

<h3><font color='#999900'> pChart library 2.x </font></h3>

pChart4mw uses the pChart Library to generate the chart images. A new major release of the pChart Library (pChart 2.x) has been released in January 2011. Links to pChart 2.x are:<br>
<br>
<ul><li><a href='http://www.pchart.net'>http://www.pchart.net</a>
</li><li><a href='http://sourceforge.net/projects/pchart/'>http://sourceforge.net/projects/pchart/</a></li></ul>

Please take note of the following regarding pChart 2.x<br>
<ol><li>As is stated on the pChart 2.x site pChart 2.x is not compatible with its predecessor pChart 1.27d. Therefore pChart4mw 1.x will not work with pChart 2.x.<br>
</li><li>Although pChart 1.x is no longer maintained there are no plans to migrate pChart4mw to pChart 2.x, pChart4mw will remain using pChart 1.x for some time.