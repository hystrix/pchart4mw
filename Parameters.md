This page describes all parameters that can be used in pchart4mw. These parameters are set inside the chart-tag, to control the look and feel of each chart.


# Introduction #
## Entering parameters ##
The parameters can be entered inside the XML-tag, so between '<pbars' and '>'. Different parameters can be separated with one or more spaces.

When a parameter expects a value (e.g. 'title'), you can use a '=' sign and then specify the value. When the value contains a whitespace (space, tab or newline) you have to put quotation marks around them. There are also parameters that do not expect a value (e.g. 'legend').

Note that, when you use a lot of parameters, you can type them on subsequent lines for readability. e.g. <br>
Using the parser function syntax:<br>
<pre><code>{{#pLines: Title=Site Visitors|colors=FF0000,00FF00,0000FF| <br>
           ymin=0|ymax=8000|labels=true|size=500x200|data=<br>
..<br>
}}<br>
</code></pre>
or using tag syntax:<br>
<pre><code>&lt;pLines Title="Site Visitors" colors=FF0000,00FF00,0000FF <br>
        ymin=0 ymax=8000 labels=true size=500x200&gt;<br>
..<br>
&lt;/pLines&gt;<br>
</code></pre>

<h2>Using Colors</h2>
When colors are specified using a parameter, the HTML color notation is used. HTML colors are defined using a <a href='http://en.wikipedia.org/wiki/Hexadecimal'>hexadecimal</a> (hex) notation for the combination of Red, Green, and Blue color values (RGB). The lowest value that can be given to one of the light sources is 0 (hex 00). The highest value is 255 (hex FF). Hex values are written as 3 double digit numbers, starting with a # sign.<br>
<br>
<i>Example</i>:<br>
<table><thead><th><b>Color</b></th><th><b>Red</b></th><th><b>Green</b></th><th><b>Blue</b></th><th><b>HTML color</b></th></thead><tbody>
<tr><td>Red         </td><td>255       </td><td>0           </td><td>0          </td><td>#FF0000          </td></tr>
<tr><td>Green       </td><td>0         </td><td>255         </td><td>0          </td><td>#00FF00          </td></tr>
<tr><td>Blue        </td><td>0         </td><td>0           </td><td>255        </td><td>#0000FF          </td></tr>
<tr><td>Yellow      </td><td>255       </td><td>255         </td><td>0          </td><td>#FFFF00          </td></tr>
<tr><td>Gray        </td><td>128       </td><td>128         </td><td>128        </td><td>#808080          </td></tr></tbody></table>

<i>See also</i>:<br>
<b><a href='http://www.w3schools.com/Html/html_colors.asp'>HTML colors at w3schools</a></b> <a href='http://html-color-codes.info/'>HTML color picker</a>

<h2>Notation</h2>
In the explanation of the parameters below, we use the following notation standards:<br>
<table><thead><th> <b>title=..</b> </th><th> This notation means that the title expects a value, but you can enter whatever you want as a title. </th></thead><tbody>
<tr><td> <b>axis[=</b><u>true</u>|false]</td><td> This parameter has a few possible values. The brackets around the value-part means that this part is optional. If it is not specified, the underlined value is taken as default. The parameter 'axis' without value means therefore that the axis must be shown. </td></tr>
<tr><td> <b>size={aa}x{bb}</b> </td><td> This means that the parameter size must have a value. The value has a specific format, in this case some number followed by a x followed by another number. The allowed values for the parameter is explained in detail in the details section for the parameter. </td></tr>
<tr><td> <b>axiscolor={color}</b> </td><td> This means that the parameter axiscolor must have a value. The value should be a HTML color, as explained in the previous paragraph. </td></tr></tbody></table>

<br>
<h1>General Parameters</h1>
This paragraph describes the general parameters that can be used in pChart4mw. The general parameters apply to all the chart types. See page <a href='ParameterDetails.md'>Parameter details</a> for these parameters with examples.<br>
<br>
<h2>Size</h2>
<dl>
<dt><b>size={aa}x{bb}</b></dt>
<dd>Sets the size of the image to aa pixels wide and bb pixels high. If only one number is given, the graph will be that wide and also that high. The minimum size of the image is dependent on the margins and whether a title and legend are shown.</dd>
<dt><b>marginx=...  marginy=...</b></dt>
<dd>
These settings determine the margin from the border of the image to the border of the drawing area. This setting is useful to keep some empty space on the edges. You can set a margin for top and bottom 'marginy' and a margin for left and right 'marginx'.</dd>
</dl>

<h2>Title</h2>
<dl>
<dt><b>title="Site visitors"</b></dt>
<dd>Sets the title of the chart to <i>Site visitors</i>. If no title is given, nothing is printed. The title is always shown on top of the chart.</dd>
<dt><b>titlefont=fontname</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.3+)</font></dt>
<dd>
Sets the font of the text of the title. Use the filename of the font with its extension. For example: tahoma.ttf</dd>
<dt><b>titlesize=size</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.3+)</font></dt>
<dd>
Sets the size of the text of the title (in pixels). For example: 8</dd>
<dt><b>titlecolor={color}</b></dt>
<dd>
Sets the color of the text of the title. Use HTML hexadecimal colors.</dd>
</dl>

<h2>Text</h2>
<dl>
<dt><b>textfont=fontname</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.3+)</font></dt>
<dd>
Sets the font of the text of the axes and legend. Use the filename of the font with its extension. For example: tahoma.ttf</dd>
<dt><b>textsize=size</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.3+)</font></dt>
<dd>
Sets the size of the text (in pixels). For example: 5</dd>
</dl>

<h2>Axes</h2>

<dl>
<dt><b>axis[=</b><u>true</u>|false]<b></dt></b><dd>
Sets whether the axes are shown or not. 'axis=true' means that the axes are shown, 'axis=false' tells the extension to hide the axes. When the axes are hidden, internally the color for the axes is set to be the same as the background color. Because of this implementation, hiding the axes does not work when setting the background type to gradient.</dd>
<dt><b>labels[=</b><u>true</u>|false]<b></dt></b><dd>Shows or hides the labels next to the axes. If no labels are given in the data section, but this parameter is set to true, numbers are shown next to the X-axis.</dd>
<dt><b>skiplabels=x</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.2+)</font></dt>
<dd>Skip labels every x time. Useful with a lot of data and wanting to show less labels. Default x = 1. This parameter is only useful for Line and Bar charts</dd>
<dt><b>decimals=x</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.2+)</font></dt>
<dd>Show x decimals. Sets the number of decimals to show. Default x = 0.</dd>
<dt><b>box[=</b><u>true</u>|false]<b></dt></b><dd>This parameter is used to draw a box around the graph area. The result is a solid line above and to the right of the graph area.</dd>
<dt><b>boxcolor={color}</b></dt>
<dd>Sets the color of the box drawn around the graph area. This parameter only has effect when 'box'=true.</dd>
<dt><b>axiscolor={color}</b></dt>
<dd>Sets the color of the axes and the labels next to the axes. This parameter only has effect when 'axis'=true.</dd>
<dt><b>xtitle=..</b> and <b>ytitle=..</b></dt>
<dd>Sets a title for the X-axis and Y-axis.</dd>
<dt><b>xunit=..</b> and <b>yunit=..</b></dt>
<dd>Sets the unit for the values on the X-axis and Y-axis. The unit is appended to the values on that axis.</dd>
<dt><b>xformat=number|time|date</b> en <b>yformat=number|time|date</b></dt>
<dd>Sets the format for the values on the X-axis and Y-axis.<br>
The format 'number' is default and shows the numbers on the axes as expected.<br>
If you set the format to 'time', the values on that axis are expected to be seconds since midnight. The number 60 will be converted to 00:01:00 and the number 3599 will be converted to 00:59:59.<br>
If you set the format to 'date', the values on that axis are expected to be seconds since 1 january 1970, midnight. This is called a UNIX timestamp. The value 1100491220 will be converted to 11/14/04 22:00</dd>
<dt><b>angle=..</b></dt>
<dd>Angle in degrees for printing the labels under the X-axis. This is especially useful when these labels are wide and the graph is small. Values must be between 0 and 180 degrees.</dd>
<dt><b>grid[=</b><u>true</u>|false]<b></dt></b><dd>Sets the visibility of the grid.</dd>
<dt><b>gridcolor={color}</b></dt>
<dd>Sets the color of the grid. This parameter only has effect when 'grid'=true.</dd>
</dl>

<h2>Colors</h2>
<dl>
<dt><b>colors={color}[,{color},...]</b></dt>
<dd>Defines the colors that are used to draw the chart. Every drawn serie will be drawn using a new color. You can specify multiple colors by separating them with a comma. When less colors are specified than needed, the colors are used multiple times. For example when 4 series are drawn and only red and green are specified as colors, the 1st and 3rd serie are drawn red and the 2nd and 4th are drawn green.</dd>
<dt><b>colorscheme=[accent|greenblue|softblue|purpleblue|paired|original|blue|wave]</b></dt>
<dd>Tells the chart to use a predefined colorscheme. A colorscheme is a set of colors looking well together. These schemes are defined in textfiles in the colorscheme directory.</dd>

<dd>If the colors and colorscheme parameters are both set, the colors parameter has precedence over the colorscheme.</dd>

More about using and creating colorschemes see: <a href='ColorSchemes.md'>colorschemes...</a>.<br>
</dl>

<h2>Data</h2>
<dl>
<dt><b>data=</b> <font color='#7B7B7B' size='1'>(pchart4mw version 1.1+)</font></dt>
<dd>Important: This parameter is only used with the parser function syntax. This is always the last and mandatory parameter before entering the data to be displayed in the chart.</dd>
<dt><b>xlabels[=true|false]</b></dt>
<dd>Set this parameter if the first column contains numeric labels. The script automatically detects whether the data contains labels when the labels are non-numeric. This flag is introduced to create the possibility for numeric labels.</dd>
<dt><b>ylabels[=true|false]</b></dt>
<dd>Set this parameter if the first row contains numeric labels. The script automatically detects whether the data contains labels when the labels are non-numeric. This flag is introduced to create the possibility for numeric labels.</dd>
<dt><b>ymin=0  ymax=..</b></dt>
<dd>
These values can be set to override automatic scaling. Different combinations of these parameters have a different effect:<br>
<b>Both 'ymax' and 'ymin' are not set: the script automatically computes the bounds for the Y-axis<br></b> Set 'ymax' but leave 'ymin' empty: the lowest value on the Y-axis is automatically computed, the highest value is set to ymax<br>
<b>Set 'ymin' to 0 but leave 'ymax' empty: the highest value on the Y-axis is computed, and the lowest value is 0. The only valid value for ymin is 0.<br></b> Set 'ymin' to 0 and 'ymax' to some other value: The Y-axis will run from 0 to ymax.</dd>
</dl>

<h2>Legend</h2>
<dl>
<dt><b>legend[=none|left|top|</b><u>right</u>|bottom]<b></dt></b><dd>Shows the legend on the specified position. If no location is given (i.e. just 'legend'), the legend is placed on the right.</dd>
<dt><b>legendcolor={color}</b></dt>
<dd>Sets the color for the text inside the legend.</dd>
<dt><b>legendbgcolor={color}</b></dt>
<dd>Sets the color for the text inside the legend.</dd>
<dt><b>legendbordercolor={color}</b></dt>
<dd>Sets the color for the border around the legend.</dd>
</dl>

<h2>Threshold</h2>
<dl>
<dt><b>threshold=value</b></dt>
<dd>Sets a theshold line and its value on the Y-axis</dd>
<dt><b>thcolor={color}</b></dt>
<dd>Sets color of the threshold line.</dd>
</dl>

<h2>Background</h2>
<dl>
<dt><b>bgcolor={color}</b></dt>
<dd>Sets the background color for the whole image. The 'graphbgcolor' sets the color for the chart area alone.</dd>
<dt><b>bgtype=normal|gradient</b></dt>
<dd>Defines the type of background for the whole image. The possibilities are<br>
<b>normal: results in a one color background<br></b> gradient: will produce a gradient on the background</dd>
<dt><b>graphbgcolor={color}</b></dt>
<dd>Sets the background color for the chart area alone.</dd>
<dt><b>graphbgtype=normal|gradient</b></dt>
<dd>Defines the type of background in the chart area. The possibilities are<br>
<b>normal: results in a one color background<br></b> gradient: will produce a gradient on the background</dd>
</dl>

<br>
<h1>Chart type specific parameters</h1>
This section describes parameters that are specific for a certain chart type.<br>
<h2>Bar chart</h2>
<dl>
<dt><b>stacked[=true|</b><u>false</u><b></dt></b><dd>Defines weather the bar chart is stacked or not</dd>
<dt><b>overlay[=true|</b><u>false</u>]<b></dt></b><dd>Produces an overlag bar chart. Does not work in combination with stacked=true</dd>
<dt><b>opacity=..</b></dt>
<dd>Sets the transparancy of the bars. 0 = fully transparent, 100 = non transparent. Standard is 100 for a stacked chart. With an overlay chart the standard is 50.</dd>
</dl>

<h2>Line chart</h2>
<dl>
<dt><b>plots=</b><u>none</u>|open|closed<b></dt></b><dd>Plots circles (open or closed)</dd>
<dt><b>plotsize=..</b></dt>
<dd>Size of the plot circle.</dd>
<dt><b>cubic[=true|</b><u>false</u>]<b></dt></b><dd>Shows a line with smooth curves.</dd>
<dt><b>filled[=true|</b><u>false</u>]<b></dt></b><dd>Fill the space underneath a line.</dd>
<dt><b>opacity=..</b></dt>
<dd>Sets the transparancy of the filled space under a line. 0 = fully transparent, 100 = non transparent. Standard is 40, works only when filled=true.</dd>
</dl>

<h2>Radar chart</h2>
<dl>
<dt><b>filled[=true|</b><u>false</u>]<b></dt></b><dd>Color fills the surface under the drawn line</dd>
<dt><b>striped[=true|</b><u>false</u>]<b></dt></b><dd>Shows striped colors in the radar chart background</dd>
<dt><b>stripecolor=...</b></dt>
<dd>Sets the color of the connecting lines (not the background)</dd>
<dt><b>opacity=..</b></dt>
<dd>Sets the transparancy of the filled space under a line. 0 = fully transparent, 100 = non transparent. Standard is 40, works only when filled=true.<br>
</dd>
</dl>

<h2>Pie chart</h2>
In a pie chart you use 1 or 2 data columns:<br>
<ul><li>title, value<br>
<dl>
<dt><b>labels[=true|</b><u>false</u>]<b></dt></b><dd>labels=false disables drawing of labels near the pie. Optionally percentages can be shown with  percentages=true. When labels=true turn legend off, using both legend and labels costs a lot of grapghic space and makes the pie small.</dd>
<dt><b>percentages[=</b><u>true</u>|false]<b></dt></b><dd>labels=true shows precentages near the pie.</dd>
<dt><b>3d[=true|</b><u>false</u>]<b></dt></b><dd>Shows the pie in 3 dimensional perspective.</dd>
<dt><b>exploded[=true|</b><u>false</u>]<b></dt></b><dd>Separates each part of the pie.</dd>
</dl></li></ul>

<h2>Scatter diagram</h2>
In a scatter chart you use 2 or 3 data columns:<br>
<ul><li>title, X-coordinate, Y-coordinate</li></ul>

Rules for columns:<br>
<ul><li>If X- and Y-coordinate columns are absent (1,1), (2,2), (3,3) etc. are used.<br>
</li><li>If only the X-coordinate is used, that value is used for both X and Y.</li></ul>

When using multiple series use more X and Y coordinates.<br>
<br>
<dl>
<dt><b>plots=</b><u>none</u>|open|closed<b></dt></b><dd>Plots a little circle (open or closed) at each measuring point</dd>
<dt><b>plotsize=..</b></dt>
<dd>Sets the size of the plotted circle</dd>
<dt><b>connected[=</b><u>true</u>|false]<b></dt></b><dd>Bepaalt of de punten verbonden moeten worden met een lijn</dd>
</dl>

<h2>Bubble chart</h2>
In a bubble chart you use 3 or 4 data columns:<br>
<ul><li>title, X-coordinate, Y-coordinate, bubble surface size</li></ul>

Rules for columns:<br>
<ul><li>If X-, Y-coordinate and surface-size columns are absent (1,1), (2,2), (3,3) etc. are used with surface-size = 1.<br>
</li><li>If only one column is used it is used as surface size with default coordinates (1,1), (2,2), (3,3) etc.<br>
</li><li>If only two column are filled, the first is used for both X and Y, the second is used as the surface-size</li></ul>

<dl>
<dt><b>plotsize=..</b></dt>
<dd>Size of the lagest bubble to be shown</dd>
<dt><b>cross=[true|</b><u>false</u>]<b></dt></b><dd>Divides the graph in four areas.</dd>