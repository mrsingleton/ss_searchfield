<?php

/*
 * Plugin Name: SS Search Field
 * Plugin URI: https://github.com/mrsingleton/ss_searchfield
 * Description: Include a standard WordPress search field in any post or page.
 * Version: 1.0
 * Text Domain: ss_searchfield
 * Author: Malik Singleton
 * Author URI: https://maliksingleton.info/solutions
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

function ss_searchfield() {	
	return get_search_form();
}
function shortcodes_init(){
	add_shortcode('searchfield','ss_searchfield');
}
add_action('init', 'shortcodes_init');
?>
