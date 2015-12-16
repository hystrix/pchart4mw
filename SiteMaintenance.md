### Cached files ###
As described in the [technical overview](TechnicalOverview.md), pchart4mw stores the generated chart images in the cache folder (default: ../images/pchart4mw/). The file names of these images are automatically generated based on the full content of the pchart4mw call. This means that every time the content of a call changes the file name of the created image also changes.

A file name is for example: 4011db4213c05eed3f30f6a350072995.png

### Clean up ###
Over time the cache folder becomes populated with unused (orphan) chart images. Periodically the wiki site administrator should do some clean up in cache folder.

It is recommended to delete **all** cached image files in the cache folder once in a while. Chart images will be (re)created whenever a page is viewed and pchart4mw discovers the chart image doesn't exist.

The frequency of this cache clean up depends on the intensity of the creation and changing of charts on your site.