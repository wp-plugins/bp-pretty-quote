<?php
/**
 * Plugin Name: BP Pretty Quote
 * Plugin URI:  http://beyond-paper.com/bp-pretty-quote-wordpress-plugin/
 * Description: Adds a formatted quotation to a post or page
 * Version: 1.0
 * Author: Diane Ensey
 * Author URI: http://beyond-paper.com
 * License: GPL2
**/

/*  Copyright 2015 Diane Ensey (email: diane@beyond-paper.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
defined( 'ABSPATH' ) or die( 'No direct access permitted!' );

//Actions
add_shortcode( 'bpiq', 'bpiq_func' );
add_action ('wp_enqueue_scripts', 'bpiq_scripts');
/*Add the Shortcode 
** Format is 
** [bpiq style = 'leather' image="theimage.jpg" title="the title" source="the_source.html" author="The Author"]The Quotation Body[/bpiq]
** styles:
**		default (CSS credit to msurguy: http://bootsnipp.com/snippets/featured/dynamic-avatar-blur)
** 		leather ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/)
**      swoosh ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/)
**      balloon ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/)
**      vinyl ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/)
**      polaroid ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/)
**      playbill ( CSS credit to CoDrops: http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/) 
*/
 function bpiq_func( $atts, $content = NULL ) {
    $a = shortcode_atts( array(
	    'style' => 'default',
        'width' => '30%',
		'image' => plugins_url( '/images/a4.jpg', __FILE__ ),
		'alt' => '',
		'author' => 'Mark Twain',
		'source' => '',
		'sourcename' => '',
		'position'=> 'right', //right, left or center
		'color' => '#284c79',
		'textcolor' => 'rgb(136, 172, 217)',

    ), $atts );
	
	$a['style'] = strtolower($a['style']);
	$a['position'] = strtolower($a['position']);

	$ret = bpiq_format_card($a, $content);
	return $ret;
}




function bpiq_format_card($a, $content){
	if($a['position'] == 'right' || $a['position'] == 'left' || $a['position'] == 'center'){
    	$align = 'bpiq_align'.$a['position'];
	}else{
		$align = 'bpiq_alignright';	
	}
	$style = $a['style'];
	$width = $a['width'];
	$author = $a['author'];
	$source = $a['source'];
	$sourcename = $a['sourcename'];
	$image = $a['image'];
	$alt = $a['alt'];
	$color = $a['color'];
	$textcolor = $a['textcolor'];

	if($a['style'] == 'default'){
	
$card = <<<EOM
	<div class="bpiq_card $align" style="width: $width; background-color: $color; color: $textcolor;">
        <canvas class="bpiq_header-bg" id="bpiq_header-blur"></canvas>
        <div class="bpiq_avatar">
            <img src="" alt="" />
        </div>
        <div class="bpiq_content">
            <p class="bpiq_quote">"$content"</p>
            <p class="bpiq_author">$author</p>
        </div>
    </div>
    <img class="bpiq_src-image"  src="$image" />
EOM;
	}else{
		$content = htmlspecialchars_decode($content);
		$backgroundthumb = 'style="background:url('.$image.') no-repeat center center;"';
		$backgroundstyle = '';
		if($style=="playbill"){
			$backgroundstyle = "style='background:#444 url(".$image.") no-repeat 100% 25%; background-blend-mode: soft-light;'";
		}
		if($style=="balloon"){
			$backgroundthumb = 'style="background:url('.$image.') no-repeat center center; background-size: cover;"';
		}
$card = <<<EOM
	<div class="$align" >
	<div class="$style bp-wrap" $backgroundstyle>
		<div class="bp-thumb" data-image="$image" $backgroundthumb ></div>
		<div class="bp_blockquote" cite="$source"><p>$content</p></div>
		<div class="bp-attribution">
			<p class="bp-author">$author</p>
			<p><cite><a href="$source">$sourcename</a></cite></p>
		</div>
	</div>
	</div>
EOM;
	}

   return $card;
}

function bpiq_scripts(){
	wp_enqueue_script('bpiq_stackblur_js', plugins_url( '/js/stackblur.js', __FILE__ ),array('jquery') );
	wp_enqueue_style( 'bpiq_style', plugins_url( '/css/style.css', __FILE__ ) );
	wp_enqueue_style( 'bpiq_style2', plugins_url( '/css/style2.css', __FILE__ ) );
}


