<?php
/*
Plugin Name: Pokey Shortcodes
Description: This plugin will enable the use of shortcodes available with the Pokey Framework.
Version: 0.1
License: MIT
Author: Nick Gallop
Author URI: http://www.nicholasgallop.com
*/

// shortcodes Gumby UI Kit

/* Grids */

// Row

function pokey_grid_row( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'valign' => ''
    ), $atts));
   return '<div class="'.$valign.' row">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_row', 'pokey_grid_row'); 

// Columns

function pokey_one_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' one columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_columns', 'pokey_one_columns');  

function pokey_two_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' two columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_columns', 'pokey_two_columns');  

function pokey_three_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' three columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_columns', 'pokey_three_columns');   

function pokey_four_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' four columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('four_columns', 'pokey_four_columns');  

function pokey_five_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' five columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('five_columns', 'pokey_five_columns');  

function pokey_six_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' six columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('six_columns', 'pokey_six_columns');  

function pokey_seven_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' seven columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('seven_columns', 'pokey_seven_columns');  

function pokey_eight_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' eight columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('eight_columns', 'pokey_eight_columns');  

function pokey_nine_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' nine columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('nine_columns', 'pokey_nine_columns');  

function pokey_ten_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' ten columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('ten_columns', 'pokey_ten_columns');  

function pokey_eleven_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' eleven columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('eleven_columns', 'pokey_eleven_columns');  

function pokey_twelve_columns( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'push' => '',
		'centered' => '',
    ), $atts));
   return '<div class="'.$push.' '.$centered.' twelve columns">' . do_shortcode($content) . '</div>';
}
add_shortcode('twelve_columns', 'pokey_twelve_columns');   

// Tiles

// later...

// Sixteen Column Grid Nesting

// later...

/* Buttons */

// Values for buttons can be used in concert with CSS
/* 

Gumby buttons with possible modifiers:

Sizes: xlarge, large, medium, small

Styles: oval, rounded, square, pill right, pill left

Metro/Pretty

Colors are compounded from the Gumby _settings.scss file:

Primary, Secondary, Default, Info, Danger, Warning, Success, Icon Left, Icon Right, Button

*/
function pokey_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'link' => '',
		'size' => 'medium',
		'style' => '',
		'color' => 'primary',
		'target' => '_self',
		'shape' => ''
    ), $atts));
	return '<div class="'.$style.' '.$size.' btn '.$color.' '.$shape.'"><a target="'.$target.'" href="'.$link.'">' . do_shortcode($content) . '</a></div>';
}
add_shortcode('pokey_button', 'pokey_button');


/* Alerts - Call out box */



/* Tabs / Layout */

// Tabs
add_shortcode( 'tabgroup', 'pokey_tabgroup' );

function pokey_tabgroup( $atts, $content ){
extract(shortcode_atts(array(
	'tabtype' => ''
), $atts));

	
$GLOBALS['tab_count'] = 0;
do_shortcode( $content );

if( is_array( $GLOBALS['tabs'] ) ){
	
foreach( $GLOBALS['tabs'] as $tab ){	
$tabs[] = '<li><a href="#'.$tab['id'].'">'.$tab['title'].'</a></li>';
$panes[] = '<div id="'.$tab['id'].'Tab" class="tab-content">'.$tab['content'].'</div>';
}
$return = "\n".'<!-- the tabs --><section class="'.$tabtype.' tabs"><ul class="tab-nav">'.implode( "\n", $tabs ).'</ul>'."\n".''.implode( "\n", $panes ).'</section>'."\n";
}
return $return;

}

add_shortcode( 'tab', 'pokey_tab' );
function pokey_tab( $atts, $content ){
extract(shortcode_atts(array(
	'title' => '%d',
	'id' => '%d'
), $atts));

$x = $GLOBALS['tab_count'];
$GLOBALS['tabs'][$x] = array(
	'title' => sprintf( $title, $GLOBALS['tab_count'] ),
	'content' =>  do_shortcode($content),
	'id' =>  $id );

$GLOBALS['tab_count']++;
}

// Normal Horizontal Tabs

// Vertical Tabs

// Pill Tabs

// Vertical Alignment

// Breaks

// Break
function pokey_break( $atts, $content = null ) {
	return '<div class="clear"></div>';
}
add_shortcode('clear', 'pokey_break');


// Line Break
function pokey_linebreak( $atts, $content = null ) {
	return '<hr /><div class="clear"></div>';
}
add_shortcode('clearline', 'pokey_linebreak');

/* Image Tweaks */

// Responsive Images

// Parallax Background Images

/* Pilfered from Skeleton by Simple Themes */

/*-----------------------------------------------------------------------------------*/
// Latest Posts
// Example Use: [latest excerpt="true" thumbs="true" width="50" height="50" num="5" cat="8,10,11"]
/*-----------------------------------------------------------------------------------*/


function pokey_latest($atts, $content = null) {
	extract(shortcode_atts(array(
	"offset" => '',
	"num" => '5',
	"thumbs" => 'false',
	"excerpt" => 'false',
	"length" => '50',
	"morelink" => '',
	"width" => '100',
	"height" => '100',
	"type" => 'post',
	"parent" => '',
	"cat" => '',
	"orderby" => 'date',
	"order" => 'ASC'
	), $atts));
	global $post;
	
	$do_not_duplicate[] = $post->ID;
	$args = array(
	  'post__not_in' => $do_not_duplicate,
		'cat' => $cat,
		'post_type' => $type,
		'post_parent'	=> $parent,
		'showposts' => $num,
		'orderby' => $orderby,
		'offset' => $offset,
		'order' => $order
		);
	// query
	$myposts = new WP_Query($args);
	
	// container
	$result='<div id="category-'.$cat.'" class="latestposts">';

	while($myposts->have_posts()) : $myposts->the_post();
		// item
		$result.='<div class="latest-item clearfix">';
		// title
		if ($excerpt == 'true') {
			$result.='<h4><a href="'.get_permalink().'">'.the_title("","",false).'</a></h4>';
		} else {
			$result.='<div class="latest-title"><a href="'.get_permalink().'">'.the_title("","",false).' <span style="font-size:.75em;">| View Post &rarr;</span> </a></div>';			
		}
		
		
		// thumbnail
		if (has_post_thumbnail() && $thumbs == 'true') {
			$result.= '<img alt="'.get_the_title().'" class="alignleft latest-img" src="'.get_bloginfo('template_directory').'/thumb.php?src='.get_image_path().'&amp;h='.$height.'&amp;w='.$width.'"/>';
		}

		// excerpt		
		if ($excerpt == 'true') {
			// allowed tags in excerpts
			$allowed_tags = '<a>,<i>,<em>,<b>,<strong>,<ul>,<ol>,<li>,<blockquote>,<img>,<span>,<p>';
		 	// filter the content
			$text = preg_replace('/\[.*\]/', '', strip_tags(get_the_excerpt(), $allowed_tags));
			// remove the more-link
			$pattern = '/(<a.*?class="more-link"[^>]*>)(.*?)(<\/a>)/';
			// display the new excerpt
			$content = preg_replace($pattern,"", $text);
			$result.= '<div class="latest-excerpt">'.st_limit_words($content,$length).'</div>';
		}
		
		// excerpt		
		if ($morelink) {
			$result.= '<a class="more-link" href="'.get_permalink().'">'.$morelink.'</a>';
		}
		
		// item close
		$result.='</div>';
  
	endwhile;
		wp_reset_postdata();
	
	// container close
	$result.='</div>';
	return $result;
}
add_shortcode("latest", "pokey_latest");

// Example Use: [latest excerpt="true" thumbs="true" width="50" height="50" num="5" cat="8,10,11"]

/*-----------------------------------------------------------------------------------*/
// Creates an additional hook to limit the excerpt
/*-----------------------------------------------------------------------------------*/

function pokey_limit_words($string, $word_limit) {
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
	$words = explode(' ', $string);
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
	return implode(' ', array_slice($words, 0, $word_limit));
}


// Related Posts - [related_posts]
add_shortcode('related_posts', 'pokey_related_posts');
function pokey_related_posts( $atts ) {
	extract(shortcode_atts(array(
	    'limit' => '5',
	), $atts));

	global $wpdb, $post, $table_prefix;

	if ($post->ID) {
		$retval = '<div class="pokey_relatedposts">';
		$retval .= '<h4>Related Posts</h4>';
		$retval .= '<ul>';
 		// Get tags
		$tags = wp_get_post_tags($post->ID);
		$tagsarray = array();
		foreach ($tags as $tag) {
			$tagsarray[] = $tag->term_id;
		}
		$tagslist = implode(',', $tagsarray);

		// Do the query
		$q = "SELECT p.*, count(tr.object_id) as count
			FROM $wpdb->term_taxonomy AS tt, $wpdb->term_relationships AS tr, $wpdb->posts AS p WHERE tt.taxonomy ='post_tag' AND tt.term_taxonomy_id = tr.term_taxonomy_id AND tr.object_id  = p.ID AND tt.term_id IN ($tagslist) AND p.ID != $post->ID
				AND p.post_status = 'publish'
				AND p.post_date_gmt < NOW()
 			GROUP BY tr.object_id
			ORDER BY count DESC, p.post_date_gmt DESC
			LIMIT $limit;";

		$related = $wpdb->get_results($q);
 		if ( $related ) {
			foreach($related as $r) {
				$retval .= '<li><a title="'.wptexturize($r->post_title).'" href="'.get_permalink($r->ID).'">'.wptexturize($r->post_title).'</a></li>';
			}
		} else {
			$retval .= '
	<li>No related posts found</li>';
		}
		$retval .= '</ul>';
		$retval .= '</div>';
		return $retval;
	}
	return;
} ?>