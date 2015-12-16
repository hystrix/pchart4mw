This page leads you through a simple step-by-step process to build a chart with pChart4mw.

A chart is defined in a wiki page using special tags. An example of such a XML-tag is `<pBars>` or `<pPie>`. For every type of chart, a different tag is available. This page shows step by step how a bar chart is made. Other types of charts are made in a similar way, using their own unique tag. More information about other types of charts can be found on the pages linked above.

#### Step 1: Initial tags ####
As explained, creating a chart starts with the XML-tag. Every tag has an opening part `<pBars>` and a closing part `</pBars>`.
```
<pbars></pbars>
```
Within the `<pbars>` tag you can include extra [parameters](Parameters.md) to customize the chart e.g.
```
<pbars size=200x150></pbars>
```


#### Step 2: Entering data ####
The tags above result in an empty chart. That is correct. To show a chart, some data has to be entered. The data can be entered between the opening and closing tag in [CSV-style](http://en.wikipedia.org/wiki/Comma-separated_values). That means: every value must be entered on a new line.
<table><tr><td>
<pre><code>&lt;pbars size=200x150&gt;<br>
5345<br>
3452<br>
7843<br>
&lt;/pbars&gt;<br>
</code></pre>

<h4>Step 3: Adding labels</h4>
Every line results in a new bar in the chart. Many times a bar should be labeled to give the chart more meaning. The label will be shown beneath the bar. In this case, the different values belong to different months:<br>
<pre><code>&lt;pbars size=200x150&gt;<br>
Oct,5345<br>
Nov,3452<br>
Dec,7843<br>
&lt;/pbars&gt;<br>
</code></pre>

<h4>Step 4: Multiple series</h4>
It is also possible to compare multiple series of data. These series are shown as bars with different colors next to eachother. Every color denotes a specific serie.<br>
<table><tr><td>
<pre><code>&lt;pbars size=200x150&gt;<br>
Oct,5345,3110,1291<br>
Nov,3452,3695,1047<br>
Dec,7843,4712,1305<br>
&lt;/pbars&gt;<br>
</code></pre>

<h4>Step 5: Labelling series</h4>
Every serie can also be labelled. This is done by entering labels on the first row. These labels can be shown in a legend.<br>
<pre><code>&lt;pbars size=300x150 legend&gt;<br>
,Europe,United States,Asia<br>
Oct,5345,3110,1291<br>
Nov,3452,3695,1047<br>
Dec,7843,4712,1305<br>
&lt;/pbars&gt;<br>
</code></pre>
Note: The label must be in the same column as the data it belongs to. The columns are separated by a comma and the first column contains the labels for the x-axis. Therefore the first label for the series is preceded with a comma.<br>
<br>
<h4>Step 6: Style the chart</h4>
Apart from the data in the chart, you can customize its look and feel using different <a href='Parameters.md'>parameters</a>. For example title and colors.<br>
<pre><code>&lt;pbars size=300x150 title="Site Visitors" ymin=0 ymax=10000 legend&gt;<br>
,Europe,United States,Asia<br>
Oct,5345,3110,1291<br>
Nov,3452,3695,1047<br>
Dec,7843,4712,1305<br>
&lt;/pbars&gt;<br>
</code></pre>

<img src='http://pchart4mw.googlecode.com/files/pchart4mw-bar-01.png' />