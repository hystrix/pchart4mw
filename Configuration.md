To configure and customize this extension, several parameters can be set.

  * [Optional settings](#Optional_settings.md), these settings are optional to configure pchart4mw to your personal preference.
  * [Default settings](#Default_settings.md), these settings are also optional and are used to set defaults for the charts on your wiki.

Note that in all settings, path and file names are case sensitive.

### Optional settings ###
<dl>
<dt><b>font path</b></dt>
<dd>Determines the path to the truetype fonts files to write text into the graph. This variable contains the absolute path to the .ttf files. The pChart4mw installation contains some font files by default in the fonts subdirectory. Add the following line to <code>LocalSettings.php</code>:<br>
<pre><code>$wgPChart4mwFontPath =  ".../fonts";<br>
</code></pre>
</dd>
</dl>

<dl>
<dt><b>image format</b></dt>
<dd>
Determines the file type of the chart images. Can be 'png', 'jpeg' or 'gif'. The default value is 'png'.<br>
Add the following line to <code>LocalSettings.php</code>:<br>
<pre><code>$wgPChart4mwImageFormat = "png";<br>
</code></pre>
</dd>
</dl>

<dl>
<dt><b>cache enabled</b></dt>
<dd>Flag whether the built-in cache should be used. Using the cache the system will only create each chart once and save it to disk. If no changes are detected, the image that is already created will be used. The default value for this parameter is true.<br>
Add the following line to <code>LocalSettings.php</code>:<br>
<pre><code>$wgPChart4mwCacheEnabled= true;<br>
</code></pre>
Good practice: Enable cache on your site. Rendering images is processing intensive therefore it is recommended to prevent unnecessary rendering by enabling cache.<br>
</dd>
</dl>

<dl>
<dt><b>cache directory</b></dt>
<dd>Directory where the created images are saved. The images are saved to this directory when created, and the saved file is loaded on the page where it should be shown. When the cache is enabled, the file is created only once, saving a lot of processing time when a page is loaded frequently. If anything in the chart code is changed, a new file is created. When the cache is disabled, the file is created again every time a page is loaded.<br>
<br>
The directory must be specified as a subdirectory of the $wgUploadPath directory. The directory must exist and be writeable. By default, the cache directory is<br>
<pre><code>$wgUploadPath/pChart4mw ([wiki]/images/pChart4mw).<br>
</code></pre>
Add the following line to <code>LocalSettings.php</code>:<br>
<pre><code>$wgPChart4mwCacheDir = "pChart4mw";<br>
</code></pre>
</dd>
</dl>

<dl>
<dt><b>color scheme directory</b></dt>
<dd>Directory containing the color schemes. These color schemes are text files with a color on each line. Every color is a comma-separated RGB color. For example:<br>
<pre><code>0,0,0<br>
51,51,51<br>
102,102,102<br>
153,153,153<br>
204,204,204<br>
255,255,255<br>
</code></pre>
The default value for this parameter is the subdirectory <code>/colorschemes</code> in the <code>$IP/extensions/pChart4mw</code> directory. All text files in this directory can be used as colorscheme. To do that, use the colorscheme parameter.<br>
<br>
Add the following line to <code>LocalSettings.php</code>:<br>
<pre><code>$wgPChart4mwDefaultColorSchemeDir = "$IP/extensions/pChart4mw/colorschemes";<br>
</code></pre>
to use the subdirectory /colorschemes of the pChart4mw subdirectory.<br>
</dd>
</dl>

<dl>
<dt><b>webservice</b></dt>
pChart4mw has the option to use it as a webservice to generate the charts. This can be useful is you want to use a different server to create the chart images. You can use the pChartwebservice.php or create your own webservice. More information can be found on the <a href='RunAsWebService.md'>webservice page</a>.<br>
</dl>

### Default settings ###
You can set default settings that apply to all charts on your wiki. All parameters that can be set for individual charts, can also be set to a default value.

To set a default size for all charts, add the following line to `LocalSettings.php`:
```
$wgPChart4mwDefaults = Array ( "size" => "200x120" );
```

To set a default textfont and textsize for all charts, add the following line to `LocalSettings.php`:
```
$wgPChart4mwDefaults = Array ( "textfont" => "mini.ttf", "textsize" => "5" ); 
```

You can separate multiple settings with a comma.
```
$wgPChart4mwDefaults = Array ( "size" => "200x120", "colorscheme" => "softblue" );
```

Another possibility is to set default values for a specific type of chart. This can be done by adding the following lines (or similar for different types of charts) to `LocalSettings.php`:
```
$wgPChart4mwLinesDefaults = Array ( "grid" => "false", "ymin" => "0", "colors" => "F00,0F0,00F" );
$wgPChart4mwBarsDefaults = Array ( "ymin" => "0" );
$wgPChart4mwPieDefaults = Array ( "3d" => "3d" );
```
Important: Note that - when caching is enabled - setting or changing default settings doesn't effect existing charts. When caching is enabled, existing rendered chart image files need to be deleted so that pchart4mw can recreate them using the changed default settings.