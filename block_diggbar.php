<?php
/*
Plugin Name: Block DiggBar
Plugin URI: http://www.entropytheblog.com/blog/2009/04/block-diggbar-in-wordpress-plugin/
Description: This plugin blocks your blog from being accessed by the DiggBar.
Version: 0.4
Author: Paul William
Author URI: http://www.entropytheblog.com/blog/

Copyright 2008 Paul William

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function block_diggbar(){
	if (preg_match('#http://digg.com/\w{1,8}/?$#',$_SERVER['HTTP_REFERER']) ) {
	    echo "<p>The DiggBar is blocked on this blog. <a href='http://daringfireball.net/2009/04/how_to_block_the_diggbar'>Read why.</a></p>";
	    exit;
	}
}

add_action( "init", 'block_diggbar', 1);
?>