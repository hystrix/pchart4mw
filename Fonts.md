### Introduction ###
Fonts are used to create text in charts along x- and y-axes and in labels, legend and title. pChart4mw enables you to set your preferred font for text (axes, labels and legend) and for the title separately.

### Using fonts ###
There are two ways to set your preferred fonts:
  1. You can set your own default font settings in the configuration of pChart4mw. These font settings will then be used as default for all the charts unless other font settings are specified for a specific chart. See also paragraph default settings in the [configuration](Configuration#Default_settings.md) page. For example:
```
$wgPChart4mwDefaults = Array ( "textfont" => "pf_arma_five.ttf", "textsize" => "6" ); 
```
  1. You can specify a preferred font in a chart definition (see [text parameters](Parameters#Text.md)). For example with the use of parameters:
```
textfont=pf_arma_five.ttf textsize=6 titlefont=georgia.ttf titlesize=12
```
If no preference is configured the default font is tahoma.
<br />
Good practice: We consider configuring preferred fonts for the whole wiki site a good practice. It provides uniformity in your charts. Use this method if possible and limit the use of font settings per chart.

### Samples ###
Underneath are some samples of the same chart. All samples use the Tahoma font for the title. The fonts used for the axes and legend in the samples are:
  1. mini font (not distributed with pchart4mw, see our tip)
  1. tahoma font (default, distributed with pchart4mw)
  1. pf\_arma\_five font with textsize 6 (distributed with pchart4mw)

All charts look good but fonts mini and pf\_arma\_five give sharp and perfectly aligned text in labels and legend.
<br />
![http://pchart4mw.googlecode.com/files/pchart4mw-font-01.png](http://pchart4mw.googlecode.com/files/pchart4mw-font-01.png)
![http://pchart4mw.googlecode.com/files/pchart4mw-font-02.png](http://pchart4mw.googlecode.com/files/pchart4mw-font-02.png)
![http://pchart4mw.googlecode.com/files/pchart4mw-font-03.png](http://pchart4mw.googlecode.com/files/pchart4mw-font-03.png)
<br />
### Tips ###
pchart4mw is distributed with a basic set of fonts to honour copyright and license terms. You can add your own fonts in your fonts folder. There are many good fonts to be found on the Internet.

One tip we like'd to share with you is that of 'mini' fonts (used in the sample above):

  * http://www.fonts101.com/ search for 'mini' and find for example:
  * http://www.fonts101.com/fonts/view/Uncategorized/31978/MINI_7.aspx  'mini' font download
  * http://www.fonts101.com/fonts/view/Pixel_Fonts/31977/MINI_7_Tight.aspx  'minitight' font download
  * http://www.minifonts.com/ Original creator of the 'mini' fonts. Here these fonts can be purchased. You can also learn a lot about fonts on this site.

The 'mini' fonts collection is particularly useful for text (axes, labels and legend) in charts. The 'mini' fonts collection is not distributed with pChart4mw.

### Share your font tips ###

Share your font tips with other users of pchart4mw in the user group: [user group...](UserGroup.md)