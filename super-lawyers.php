<?php
/*
Plugin Name: WP Super Lawyers
Plugin URI: http://realbigplugins.com
Description: Allows for the easy display of a Super Lawyers badge on your WordPress site.
Version: 0.1
Author: Kyle Maurer
Author URI: http://kyleblog.net
License: GPL2
*/

function wp_super_lawyers() {
	$badge = '<div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em \'Arial\',sans-serif; position:relative; outline:none; border:none;">
<div id="large_super_lawyers_badge" style="height:150px; width:180px; background-image:url(\'http://i.superlawyers.com/shared/badge/lawyer/basic/large_blue.png\'); text-align:center; outline:none; border:none; line-height:1; font-size:100%">
<table width="180px" border="0" cellpadding="0" cellspacing="0" frame="void" rules="none" summary="" dir="ltr" style="margin: 0; padding:0; outline:none; border: none;">
<tr align="center" char="" charoff="" valign="bottom" style="height:75px; vertical-align:bottom; margin: 0; padding:0; outline:none; border: none;"><td align="center" colspan="1" rowspan="1" valign="bottom" style="margin: 0; padding:0; outline:none; border: none;"><a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/michigan/lawyer/Bruce-A-Inosencio-Jr/40985e01-cba2-4e95-af19-28d326ab8566.html&amp;c=basic_largeblue_badge&amp;i=40985e01-cba2-4e95-af19-28d326ab8566" rel="nofollow" style="height:75px; width:150px; display:block; text-decoration:none; margin:0; padding:0; text-align:center; outline:none; border:none;">&#160;</a></td></tr>
<tr align="center" char="" charoff="" valign="middle" style="margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;"><td style="height:0px; vertical-align:middle; margin: 0; padding:0 10px; line-height: 1; font-size: 100%; outline:none; border:none;" valign="middle" align="center" colspan="1" rowspan="1"><a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/michigan/lawyer/Bruce-A-Inosencio-Jr/40985e01-cba2-4e95-af19-28d326ab8566.html&amp;c=basic_largeblue_badge&amp;i=40985e01-cba2-4e95-af19-28d326ab8566" alt="View the profile of Michigan Construction Litigation Attorney Bruce A. Inosencio, Jr." title="View the profile of Michigan Construction Litigation Attorney Bruce A. Inosencio, Jr." style=" height:40px; width:150px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; text-align:center; font-family:arial,sans-serif; color:rgb(255,255,255); font-size:16px; font-weight:bold; outline:none; border:none;">Bruce A. Inosencio,<br/>Jr.</a></td></tr>
<tr align="center" char="" charoff="" valign="bottom" style="margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;"><td style="height:26px; vertical-align:bottom; margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;" valign="bottom" align="center" colspan="1" rowspan="1"><a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com&amp;c=basic_large_blue_badge&amp;i=home_page" alt="Visit the official website of Super Lawyers" title="Visit the official website of Super Lawyers" style="height:20px; width:150px; display:block; text-decoration:none; margin:0; padding:0; line-height:1; font-size:100%; outline:none; border:none;">&#160;</a></td></tr>
</table></div></div>';

return $badge;
}

add_shortcode( 'super_lawyers', 'wp_super_lawyers' );