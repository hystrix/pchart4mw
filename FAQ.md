This page will gradually be filled with FAQ's that reach us (for example from the [UserGroup](UserGroup.md) of pchart4mw) or the extension's talk page.

#### Q & A ####
<table border='0'>
<tr>
<td width='15px' valign='top'><b>Q</b></td>
<td>I only see a blank (transparent) image?</td>
<tr>
</tr>
<td valign='top'><b>A</b></td>
<td>This happens when pChart4mw does not receive any data. Make sure there is data in the chart definition and that each data-item is properly separated with line-breaks.</td>
</tr>
</table>

<table border='0'>
<tr>
<td width='15px' valign='top'><b>Q</b></td>
<td>How do I check the PHP settings of my server?</td>
<tr>
</tr>
<td valign='top'><b>A</b></td>
<td>pChart4mw requires PHP with GD Library and freetype extension enabled. To check if your PHP installation matches these requirements you need to aquire its PHP settings. To do this you can do the following:<br>
Make a text file named <code>phpinfo.php</code> with the following content:<br>
<pre><code>&lt;?php<br>
<br>
// Show all information<br>
phpinfo();<br>
<br>
?&gt;<br>
</code></pre>
Save the file <code>phpinfo.php</code> on your webserver. For example <code>http:\\www.mysite.com\phpinfo.php</code>. Then browse to that page with your browser.<br>
<br>
As a result you'll see a lot of PHP info as output. Search for "freetype" and under the header <b>gd</b> you can check whether or not GD and freetype are enabled.<br>
</td>
</tr>
</table>