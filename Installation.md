This page describes the default installation and initial configuration of the pChart4mw extension version 1.3.0<sup>+</sup>. Most steps of the installation and configuration are the same as for other MediaWiki extensions. When you follow the following steps, the extension should work within minutes.

### Step 0: Preparations ###
#### a) Check requirements ####
You need a up-and-running MediaWiki wiki-site. Make sure that the PHP version on your server is 5.x and has GD library with freetype extension enabled. pChart4mw has proven to work well with MediaWiki versions 1.12 ... 1.20.<br><font color='#7B7B7B' size='2'>(Note: Do not use PHP5.3.1, it has a bug in it and is not supported to run with MediaWiki.)</font>

Check other requirements on the <a href='ReleaseNotes.md'>release notes</a> page.<br>
<h4>b) Save your custom colorschemes and fonts</h4>
When you are upgrading from an older version of pChart4mw make sure to save any custom colorschemes or fonts that you might have added to your installation. (and don't forget to put them back after upgrading).<br>
<br>
<h3>Step 1: Install the pChart4mw extension</h3>
Download the pChart4mw extension (zip-file) from our download page or <a href='ReleaseNotes.md'>release notes page</a> and extract it into your new <tt>pChart4mw</tt> extension folder:<br>
<pre><code>$IP/extensions/pChart4mw<br>
</code></pre>
After extraction you should have these files and sub-folders:<br>
<pre><code>$IP/extensions/pChart4mw/colorschemes/<br>
                        /colorschemes/*.txt<br>
                        /fonts/<br>
                        /fonts/*.ttf<br>
                        /pChart/<br>
                        /pChart/*.class<br>
                        /pChart4mw.php<br>
                        /pChart4mw.class.php<br>
                        /pChart4mw.bars.class.php<br>
                        /pChart4mw.bubble.class.php<br>
                        /pChart4mw.lines.class.php<br>
                        /pChart4mw.pie.class.php<br>
                        /pChart4mw.radar.php<br>
                        /pChart4mw.scatter.class.php<br>
                        /library.inc.php<br>
                        /0-changes.txt<br>
                        /0-licence.txt<br>
</code></pre>

<h3>Step 2: Tell MediaWiki about this extension</h3>
Once the files are installed you need to let MediaWiki know about this extension. Add the following line to the file <code>LocalSettings.php</code>
<pre><code>require_once( "$IP/extensions/pChart4mw/pChart4mw.php" );<br>
</code></pre>

<h3>Step 3: Check the cache folder</h3>
Before you start using your site with this new extension, make sure the cache folder exists and is writeable! <br> On Unix systems use the 'chmod 777' command to set the folder permissions.<br>
<br>
<pre><code>$IP/images/pChart4mw/<br>
</code></pre>

Your setup is good to go.<br>
<br>
<h3>Configure the extension</h3>
There are additional (optional) configuration options you might like to set to customize your installation of pchart4mw to your personal preferences. (Recommended is to do this after testing <a href='YourFirstGraph.md'>your first chart</a>).<br>
<br>
Information about configuration of pchart4mw can be found in the section <a href='Configuration.md'>configuration</a>.<br>
<br>
<h3>Maintenance</h3>
Important: As administrator of the wiki site make sure to read the <a href='SiteMaintenance.md'>maintenance</a> instructions.