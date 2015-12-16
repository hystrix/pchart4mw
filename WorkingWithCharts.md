pChart4mw is capable of generating six different types of charts (line, bar, pie, scatter, radar and bubble). Each [chart type](#Chart_types.md) has its own unique tag.

The general syntax of a chart definition in a wiki page is
```
<pChartType p1 p2 p3 ...>
 data...
</pChartType>
```
where
  * `<pChartType>` is the tag unique to each [type of chart](#Chart_types.md)
  * `p1 p2 p3 ...` is your choice of [parameters](Parameters.md) to customize the chart
  * `data` is the data to be displayed in the chart

Follow the [step-by-step guide](BuildAChart.md) to build some sample charts and get a feel for the steps required to create them.

#### Chart types ####
The types of charts (with their unique tags) are:
  * [Bar charts](ExampleBarCharts.md) using tag `<pBars>`
  * [Line charts](ExampleLineCharts.md) using tag `<pLines>`
  * [Pie charts](ExamplePieCharts.md) using tag `<pPie>`
  * [Scatter charts](ExampleScatterCharts.md) using tag `<pScatter>`
  * [Radar charts](ExampleRadarCharts.md) using tag `<pRadar>`
  * [Bubble charts](ExampleBubbleCharts.md) using tag `<pBubble>`

Information on how to create the different charts with all specific parameters can be found on the example pages per chart type.

#### Parameters ####
As explained before, several parameters can be used to control the way a chart looks. This table gives an overview of a number of commonly used parameters and the chart types where the parameters can be used. A complete list of all parameters is found on the page [parameters](Parameters.md).

| **Parameter** | **Bars** | **Pie** | **Lines** | **Radar** | **Scatter** | **Bubble** | **Description** |
|:--------------|:---------|:--------|:----------|:----------|:------------|:-----------|:----------------|
| size          | yes      | yes     | yes       | yes       | yes         | yes        | Determines the size of the chart image in pixels. |
| title         | yes      | yes     | yes       | yes       | yes         | yes        | Sets the title of the chart. The title is printed on top of the chart. |
| colors        | yes      | yes     | yes       | yes       | yes         | yes        | Sets the color(s) for the chart in RRGGBB-style (like FF0000 for red). If you have multiple data columns separate the colors with a colon. If more colors are needed to draw the chart than given, the colors are used multiple times. |
| labels        | yes      | yes     | yes       | no        | yes         | yes        | Set labels=false to hide the labels on the X and Y axes. |
| grid          | yes      | no      | yes       | no        | yes         | yes        | Often a chart is more appealing if there is a grid under it. Use grid=true to do so. Otherwise, set grid=false. |
| legend        | yes      | yes     | yes       | yes       | yes         | yes        | you can add a legend to the chart with the legend parameter and putting the labels in the first row of the content. You can specify the location of the legend by setting legend=top, legend=bottom, legend=left or legend=right. Any other value will put the legend on the right. |
| stacked       | yes      | no      | no        | no        | no          | no         | if you show multiple data columns in a chart you can use the stacked-parameter to show them stacked and not side by side. |
| plots         | no       | no      | yes       | no        | yes         | no         | shows small circles on the position of the measured values. Possible values are 'open', 'closed' or 'none'.|
| opacity       | yes      | no      | yes       | yes       | no          | no         | sets the opacity of the bars or the area underneath the line or radar area. A number between 0 and 100 is allowed |
| 3d            | no       | yes     | no        | no        | no          | no         | make the pie chart three dimensional. |