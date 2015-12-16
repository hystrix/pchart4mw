This page gives a technical overview and technical background of pchart4mw.

#### Introduction ####
pChart4mw is built as a wrapper around pChart. The chart generation itself is done by pChart, the logic of converting the wiki tags to a chart is done by this extension. This process follows these steps

  1. **Get default settings**: default settings can be set per chart type in `LocalSettings.php`. These settings are read from `LocalSettings.php` and settings that are left empty are filled in by built-in defaults.
  1. **Parse chart arguments**: the arguments from the XML tag are parsed by the system. Correct parameters are used for chart generation and parameters that are not set are filled in with default settings.
  1. **Parse chart data**: the data between the opening and closing tag is parsed and checked for correctness. If too much or too little data is entered, interpolation is applied.
  1. **Initialize chart**: create the chart object with correct background and print the axes if needed.
  1. **Draw chart**: draw the chart itself based on the data that is entered by the user. This method is different for each type of chart.
  1. **Finish chart**: print the title and legend to finish the chart.
  1. **Output**: output the correct HTML code to the browser that shows the chart.

#### Files ####
The basic pChart4mw file is `pChart4mw.php`. This file is loaded by [Mediawiki](http://www.mediawiki.org). It sets the default settings, determines the files to be loaded and tells [Mediawiki](http://www.mediawiki.org) to call a specific function based.

When the wiki-code for a chart is found, a specific class for that chart is loaded. For example when the code
```
<pBars>
   300
   500
   800
</pBars>
```
is found, the class 'pChart4mwBars' is loaded. All chart classes are subclasses of the generic 'pChart4mw' class. This class contains basic parsing and chart generation that is needed for all types of chart. The specific chart classes contain more specific parsing and chart generation for these types of charts.

#### Caching ####
pChart4mw contains a built-in cache method. The generated files are stored on the hard disk in order to show the charts in the wiki. Because these files are stored, we also use these stored files as a cache. Because the pages on a wiki might be loaded frequently, every time the same chart is requested, the same file is used. This saves a lot of generation time, because the charts only have to be generated once.

The charts are saved with a filename that is generated using a MD5 hash:
```
  $filename = MD5( $type . $data . $arguments );
```
When the same chart is requested for a second time, the system sees that the file already exists.

Although this system is not waterproof (different charts might result in the same MD5 hash), it works good enough for chart generation.

Tip: Read the [administrators maintenance](SiteMaintenance.md) page for required maintenance of the cache folder on your wiki site.