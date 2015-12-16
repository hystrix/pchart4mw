### Introduction ###
pChart4mw has the option to use it as a webservice to generate the charts. This can be useful is you want to use a different server to create the chart images. You can use the pChartwebservice.php or create your own webservice.

### When to use the webservice option ###
This configuration option is available for situations where many charts change often. These situations can consume a lot of processing power from the server in creating chart images.

Creating chart images is a CPU intensive process. Depending on the charting intensity on the wiki a site might require more powerful server processing capacity. pchart4mw's web service option is specifically created to enable separating the processing for creating chart images from processing for the main wiki site.

However, any site with moderate changes of its charts should have no problem and should run perfectly well without a pchart4mw web service configuration. Make sure you really need this.

<font color='#FF7F2A' size='2'>!! Note: This is advanced use of pchart4mw. </font>

### Configuration ###

By default, pChart4mw generates the charts on the same server as the wiki runs.
To use it as a webservice add the following line to `LocalSettings.php`:
```
$wgPChart4mwWebservice = "http://localhost:8000/wiki/extensions/pChart4mw/pChartWebservice.php";
```
Using this line you set the location of the script that generates the charts. This particular setup will use a script on localhost. The installation or creation of this script is described below.

### Installing the webservice ###
pChart4mw contains a PHP file that functions as a webservice. To use the webservice that is delivered with the extension, you should install pChart4mw both on the server where the wiki is and also on the server where the charts should be generated. When using the webservice, most parameters set in this file do not have any effect. The parameters should be set in the webservice file itself.

It is also possible to use a different webservice. You can build your own or use a webservice somebody else created. There are a few requirements for this webservice.
  1. The webservice must be able to handle a HTTP GET request.
  1. The webservice should accept a parameter called _data and a parameter called_type (see below for details).
  1. The webservice should output the image contents directly.

### Parameters ###
The webservice should accept a parameter called _data. This parameter contains all data to generate the chart, just as it is entered by the user in the wiki. Newlines are converted to literal '|', in order to get all data on one line._

Another parameter is _type. It contains the type of chart to be generated. The type can be
  * bars
  * lines
  * pie
  * radar
  * scatter
  * bubble_

All other arguments are given by [key](key.md)=[value](value.md) pairs, just as they are entered by the user in the wiki. Arguments without a value will contain the name of the argument as value.

For example wikitext like this
```
<pBars size=300x200 legend opacity=60>
Sep,3871
Oct,3500
Nov,3667
Dec,1994
</pBars>
```
will produce a HTTP request like this
```
http://webservice?_type=bars&_data=Sep,3871|Oct,3500|Nov,3667|
       Dec,1994&size=300x200&legend=legend&opacity=60
```

The different parameters are

|_type_|bars|
|:|:---|
|_data_|Sep,3871|Oct,3500|Nov,3667|Dec,1994|
|size|300x200|
|legend|legend|
|opacity|60  |