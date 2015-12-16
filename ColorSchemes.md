### Introduction ###
A colorscheme is a set of colors that will be applied to your data series in order to make them visually different. pChart4mw can work with pre-defined colorschemes. The download of pChart4mw comes with a few [standard colorschemes](#Standard_colorschemes.md): accent, blue, excel, greenblue, original, paired, purpleblue, softblue and wave. <br>
Of course you can also easily <a href='#Make_your_own.md'>create your own</a>.<br>
<br>
<h3>Using colorschemes</h3>
There are two ways to use colorschemes:<br>
<ul><li>You can set your own default colorscheme in configuration of pChart4mw. This colorscheme will then be used as default for all the charts unless other colors or colorschemes are defined for the specific chart. See also paragraph default settings in the <a href='Configuration#Default_settings.md'>configuration</a> page. For example:<br>
<pre><code>$wgPChart4mwDefaults = Array ( "size" =&gt; "200x120", "colorscheme" =&gt; "blue" );<br>
</code></pre>
</li><li>You can call a preferred scheme in a chart definition (see <a href='Parameters#Colors.md'>color parameters</a>). For example:<br>
<pre><code>colorscheme=accent<br>
</code></pre></li></ul>

<h3>Standard colorschemes</h3>
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-accent.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-original.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-paired.png' />
<br>
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-blue.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-softblue.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-greenblue.png' />
<br>
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-wave.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-purpleblue.png' />
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-excel.png' />

Note: Colorscheme <i>blue</i> has the same colors as <i>softblue</i> only in reverse order<br>
<br>
<h3>Make your own</h3>
A colorscheme is a simple text file, that is stored in the colorschemes folder of pChart4mw. Its filename is the name of the colorscheme and it always has extension ".txt"<br>
<br>
To create your own colorscheme simply make a new colorscheme text file with RGB (Red Green Blue) colors on separate lines. <br>
Tip: <i>Make colorschemes with six to eight colors so that there are enough colors in it for different data series.</i>

For example create a text file with the name wave.txt containing:<br>
<pre><code>204,230,254<br>
153,204,254<br>
128,179,230<br>
102,153,204<br>
51,102,153<br>
254,254,204<br>
230,230,179<br>
217,217,139<br>
</code></pre>
And you've created colorscheme "wave" with these colors:<br>
<br>
<img src='http://pchart4mw.googlecode.com/files/pchart4mw-col-wave.png' />

Note: Be aware of the fact that not every set of colors is usable for every type of chart. A line chart for example needs better distinguishable colors than a bar chart.<br>
<br>
<h3>Make a color palette</h3>

If you wish to create your own palette a helpful site is:<br>
<a href='http://colorbrewer2.org/'>http://colorbrewer2.org/</a>

<h3>Share your custom colorscheme</h3>

Share your custom colorscheme  with other users of pchart4mw in the user group:<br>
<a href='UserGroup.md'>user group...</a>
