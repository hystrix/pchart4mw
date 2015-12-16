# Parameters for all types of charts #
There are a number of parameters that can be set for all types of charts.



## Size of the chart ##
<dl>
<dt><b>size={aa}x{bb}</b></dt>
<dd>Sets the size of the image to aa pixels wide and bb pixels high. If only one number is given, the graph will be that wide and also that high. The minimum size of the image is dependent on the margins and whether a title and legend are shown.<br>
<br>
<i>Examples:</i>
<table><thead><th> Shows a bar chart of 300 pixels wide and 200 pixels high </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars size=300x200&gt;<br>
20<br>
&lt;/pBars&gt;<br>
</code></pre>

<table><thead><th> Shows a bar chart of 100 pixels wide and 100 pixels high </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars size=100&gt;<br>
40<br>
50<br>
&lt;/pBars&gt;<br>
</code></pre>

<table><thead><th> Shows a bar chart of 250 pixels wide and uses the default number of pixels for height </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars size=250x&gt;<br>
40<br>
50<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>

<dt><b>marginx=...  marginy=...</b></dt>
<dd>
These settings determine the margin from the border of the image to the border of the drawing area. This setting is useful to keep some empty space on the edges. You can set a margin for top and bottom 'marginy' and a margin for left and right 'marginx'.<br>
<br>
<i>Example:</i>
<table><thead><th> Sets all margins to zero </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines marginx=0 marginy=0&gt;<br>
Jan,45<br>
Feb,62<br>
Mar,51<br>
Apr,44<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
</dl>

## Title ##
<dl>
<dt><b>title="Site visitors"</b></dt>
<dd>Sets the title of the chart to <i>Site visitors</i>. If no title is given, nothing is printed. The title is always shown on top of the chart.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the title Average temperature above the graph </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines title="Average temperature"&gt;<br>
Jan,45<br>
Feb,62<br>
Mar,51<br>
Apr,44<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>titlecolor={color}</b></dt>
<dd>
Sets the color of the text of the title. Use HTML hexadecimal colors.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the title Average temperature in red. </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines title="Average temperature" titlecolor=#FF0000&gt;<br>
Jan,45<br>
Feb,62<br>
Mar,51<br>
Apr,44<br>
&lt;/pLines&gt;<br>
</code></pre>

</dd>
</dl>

## Axes ##

<dl>
<dt><b>axis[=</b><u>true</u>|false]<b></dt></b><dd>
Sets whether the axes are shown or not. 'axis=true' means that the axes are shown, 'axis=false' tells the extension to hide the axes. When the axes are hidden, internally the color for the axes is set to be the same as the background color. Because of this implementation, hiding the axes does not work when setting the background type to gradient.<br>
<br>
<i>Example</i>:<br>
<table><thead><th> Creates a bar chart with axis shown </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars axis&gt;<br>
49<br>
&lt;/pBars&gt;<br>
</code></pre>

<table><thead><th> Hides the axes on a line chart </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines axis=false&gt;<br>
4<br>
6<br>
2<br>
3<br>
&lt;/pLines&gt;<br>
</code></pre>

<table><thead><th> Tries to hide the axes. Because the background type is gradient, the axes will still be visible </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines bgtype=gradient axis=false&gt;<br>
4<br>
6<br>
2<br>
3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>labels[=</b><u>true</u>|false]<b></dt></b><dd>Shows or hides the labels next to the axes. If no labels are given in the data section, but this parameter is set to true, numbers are shown next to the X-axis.<br>
<br>
<i>Example:</i>
<table><thead><th>Shows the labels in the graph</th></thead><tbody></tbody></table>

<pre><code>&lt;pLines labels&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>box[=</b><u>true</u>|false]<b></dt></b><dd>This parameter is used to draw a box around the graph area. The box is default drawn in the same color as the gridcolor. The result is a solid line above and to the right of the graph area.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows a box around the graph area </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines box&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>boxcolor={color}</b></dt>
<dd>Sets the color of the box drawn around the chart. This parameter only has effect when 'box'=true.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the box around the graph in a very light grey </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines box=true boxcolor=#E1E1E1&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>

<dt><b>axiscolor={color}</b></dt>
<dd>Sets the color of the axes and the labels next to the axes. This parameter only has effect when 'axis'=true.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the axes and labels in the graph in red </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines axiscolor=#FF0000&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>xtitle=..</b> and <b>ytitle=..</b></dt>
<dd>Sets a title for the X-axis and Y-axis.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows titels next to the X-axis and Y-axis </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines xtitle="Months" ytitle="Calls per day"&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>xunit=..</b> and <b>yunit=..</b></dt>
<dd>Sets the unit for the values on the X-axis and Y-axis. The unit is appended to the values on that axis.<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the values on the Y-axis as millions </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines yunit="M" title="Turnover per month"&gt;<br>
Jan,4<br>
Feb,5<br>
Mar,4.2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>xformat=number|time|date</b> en <b>yformat=number|time|date</b></dt>
<dd>Sets the format for the values on the X-axis and Y-axis.<br>
The format 'number' is default and shows the numbers on the axes as expected.<br>
If you set the format to 'time', the values on that axis are expected to be seconds since midnight. The number 60 will be converted to 00:01:00 and the number 3599 will be converted to 00:59:59.<br>
If you set the format to 'date', the values on that axis are expected to be seconds since 1 january 1970, midnight. This is called a <a href='http://www.unixtimestamp.com'>UNIX timestamp</a>. The value 1100491220 will be converted to 11/14/04 22:00<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the values on the X-axis as time </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines title="Calls over time" xunit="time" xlabels&gt;<br>
32400,60<br>
36000,140<br>
39600,160<br>
43200,120<br>
46800,89<br>
50400,171<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>angle=..</b></dt>
<dd>
Angle in degrees for printing the labels under the X-axis. This is especially useful when these labels are wide and the graph is small. Values must be between 0 and 180 degrees.<br>
<br>
<i>Example:</i>
<table><thead><th> The labels on the X-axis are rotated 45 degrees </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars angle=45&gt;<br>
January,5<br>
February,10<br>
March,20<br>
April,15<br>
May,22<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>grid[=</b><u>true</u>|false]<b></dt></b><dd>Sets the visibility of the grid.<br>
<i>Example:</i>
<table><thead><th> Shows a grid underneath the chart </th></thead><tbody></tbody></table>

<pre><code>&lt;pScatter grid&gt;<br>
1,2<br>
4,2<br>
3,6<br>
3,4<br>
7,1<br>
&lt;/pScatter&gt;<br>
</code></pre>
</dd>
<dt><b>gridcolor={color}</b></dt>
<dd>Sets the color of the grid. This parameter only has effect when 'grid'=true.<br>
<br>
This parameter is present since version 1.0.2<br>
<br>
<i>Example:</i>
<table><thead><th> Shows the grid behind the graph in red</th></thead><tbody></tbody></table>

<pre><code>&lt;pLines grid gridcolor=#FF0000&gt;<br>
Jan,4<br>
Feb,6<br>
Mar,2<br>
Apr,3<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
</dl>

## Colors ##
<dl>
<dt><b>colors={color}[,{color},...]</b></dt>
<dd>Defines the colors that are used to draw the chart. Every drawn serie will be drawn using a new color. You can specify multiple colors by separating them with a comma. When less colors are specified than needed, the colors are used multiple times. For example when 4 series are drawn and only red and green are specified as colors, the 1st and 3rd serie are drawn red and the 2nd and 4th are drawn green.<br>
<br>
<i>Examples:</i>
<table><thead><th> Bar chart with two series in red and green </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars colors=#F00,#00F&gt;<br>
16,18<br>
22,26<br>
49,49<br>
35,36<br>
&lt;/pBars&gt;<br>
</code></pre>
<table><thead><th> Bar chart with four series in red and green </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars colors=#F00,#00F&gt;<br>
16,18,13,15<br>
22,26,21,25<br>
49,49,52,50<br>
35,36,34,37<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>colorscheme=[accent|greenblue|softblue|purpleblue|paired|original|blue|wave]</b></dt>
<dd>Tells the chart to use a predefined colorscheme. A colorscheme is a list of colors looking well together. These schemes are defined in text files in the colorscheme directory specified in the <a href='Configuration.md'>Configuration</a>.<br>
<br>
If the colors and colorscheme parameters are both set, the colors parameter has precedence over the colorscheme.<br>
<br>
<i>Example:</i>
<table><thead><th> A pie chart with soft blue tones </th></thead><tbody></tbody></table>

<pre><code>&lt;pPie colorscheme="softblue"&gt;<br>
Administration,23<br>
Management,19<br>
IT and services,28<br>
Sales,25<br>
Production,47<br>
&lt;/pPie&gt;<br>
</code></pre>
</dd>
</dl>

## Data ##
<dl>
<dt><b>xlabels[=true|false]</b></dt>
<dd>Set this parameter if the first column contains numeric labels. The script automatically detects whether the data contains labels when the labels are non-numeric. This flag is introduced to create the possibility for numeric labels.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with numeric labels on the X-axis </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars xtitle="minute" ytitle="calls" xlabels&gt;<br>
0,25<br>
10,26<br>
20,31<br>
30,30<br>
40,36<br>
50,27<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>ylabels[=true|false]</b></dt>
<dd>Set this parameter if the first row contains numeric labels. The script automatically detects whether the data contains labels when the labels are non-numeric. This flag is introduced to create the possibility for numeric labels.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with numeric labels for the different series </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars xtitle="minute" ytitle="calls"&gt;<br>
,2008,2009<br>
0,25,26<br>
10,26,26<br>
20,31,29<br>
30,30,32<br>
40,36,33<br>
50,27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>ymin=0  ymax=..</b></dt>
<dd>
These values can be set to override automatic scaling. Different combinations of these parameters have a different effect:<br>
<b>Both 'ymax' and 'ymin' are not set: the script automatically computes the bounds for the Y-axis<br></b> Set 'ymax' but leave 'ymin' empty: the lowest value on the Y-axis is automatically computed, the highest value is set to ymax<br>
<b>Set 'ymin' to 0 but leave 'ymax' empty: the highest value on the Y-axis is computed, and the lowest value is 0. The only valid value for ymin is 0.<br></b> Set 'ymin' to 0 and 'ymax' to some other value: The Y-axis will run from 0 to ymax.<br>
<br>
<i>Examples:</i>
<table><thead><th> A bar chart with automatic scaling </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
<table><thead><th> A bar chart running from 0 to 50 </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars ymin=0 ymax=50&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>

</dd>
</dl>

## Legend ##
<dl>
<dt><b>legend[=none|left|top|</b><u>right</u>|bottom]<b></dt></b><dd>Shows the legend on the specified position. If no location is given (i.e. just 'legend'), the legend is placed on the right.<br>
<br>
<i>Examples:</i>
<table><thead><th> A bar chart with legend</th></thead><tbody></tbody></table>

<pre><code>&lt;pBars legend&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
<table><thead><th> A line chart with a legend on the left </th></thead><tbody></tbody></table>

<pre><code>&lt;pLines legend=left&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pLines&gt;<br>
</code></pre>
</dd>
<dt><b>legendcolor={color}</b></dt>
<dd>Sets the color for the text inside the legend.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with legend with red text</th></thead><tbody></tbody></table>

<pre><code>&lt;pBars legend legendcolor=#F00&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>legendbgcolor={color}</b></dt>
<dd>Sets the color for the text inside the legend.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with legend with red background</th></thead><tbody></tbody></table>

<pre><code>&lt;pBars legend legendbgcolor=#F00&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>legendbordercolor={color}</b></dt>
<dd>Sets the color for the border around the legend.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with legend with red border</th></thead><tbody></tbody></table>

<pre><code>&lt;pBars legend legendbordercolor=#F00&gt;<br>
Y2008,Y2009<br>
25,26<br>
26,26<br>
31,29<br>
30,32<br>
36,33<br>
27,29<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
</dl>

## Background ##
<dl>
<dt><b>bgcolor={color}</b></dt>
<dd>Sets the background color for the whole image. The 'graphbgcolor' sets the color for the chart area alone.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with green background </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars bgcolor=#0F0&gt;<br>
24,43<br>
28,31<br>
11,22<br>
42,21<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>bgtype=normal|gradient</b></dt>
<dd>Defines the type of background for the whole image. The possibilities are<br>
<b>normal: results in a one color background<br></b> gradient: will produce a gradient on the background<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with gradient background </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars bgtype=gradient&gt;<br>
24,43<br>
28,31<br>
11,22<br>
42,21<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>graphbgcolor={color}</b></dt>
<dd>Sets the background color for the chart area alone.<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with yellow chart area on green background </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars bgcolor=#0F0 graphbgcolor=#0FF&gt;<br>
24,43<br>
28,31<br>
11,22<br>
42,21<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>
<dt><b>graphbgtype=normal|gradient</b></dt>
<dd>Defines the type of background in the chart area. The possibilities are<br>
<b>normal: results in a one color background<br></b> gradient: will produce a gradient on the background<br>
<br>
<i>Example:</i>
<table><thead><th> A bar chart with gradient background </th></thead><tbody></tbody></table>

<pre><code>&lt;pBars graphbgtype=gradient&gt;<br>
24,43<br>
28,31<br>
11,22<br>
42,21<br>
&lt;/pBars&gt;<br>
</code></pre>
</dd>