### What you need ###
The pChart for MediaWiki extension (pchart4mw) uses the (free) PHP Chart Library 'pChart' to create chart images. pChart4mw works, together with the pChart Library, fully within your MediaWiki server environment. The data that is displayed in the chart is also processed within your MediaWiki server.

The pChart Library is not a part of the extension pchart4mw but it is a separate product. For ease of installation the necessary pChart Library files are distributed with pChart4mw (as of version 1.3.0).

### Requirements ###
You need a up-and-running MediaWiki wiki-site. Make sure that the PHP version on your server is 5.x and has GD library with freetype extension enabled. Check requirements on the [release notes](ReleaseNotes.md) page.

### Set up this extension ###
There are a few simple steps to set up this extension on your MediaWiki site:

  1. [Install](Installation.md) the pChart4mw (including the pChart library)
  1. [Try and test](YourFirstGraph.md) your first chart.
  1. [Configure and customize](Configuration.md) the extension to your personal preferences