<?php
/*
Plugin Name: PaukerStats
Plugin URI: http://www.mysse.net/
Description: This plugin adds a widget that will show the stats from a Pauker card set. There is also a plugin called Pauker that shows a random card in your sidebar. see http://pauker.sourceforge.net/ for more details on Pauker by ???
Version: 1.1
Author: moe
Author URI: http://www.mysse.net/
*/

/*  Copyright 2009  Moe  (email : paukerpluginReMoVeThIsBeFoReSeNdInG@mysse.net)

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
$plugin_dir = basename(dirname(__FILE__));
load_plugin_textdomain( 'paukerstats', 'wp-content/plugins/' . $plugin_dir, $plugin_dir );
define(PAUKERFILE, 'pauker.pau');
define(PAUKERUPLOADPATH, '../wp-content/uploads/pauker/');
define(PAUKEROPENPATH, 'wp-content/uploads/pauker/');

function widget_paukerstats_register() {
	function widget_paukerstats($args) {
?>
		<?php echo $before_widget; ?>
			<?php echo $before_title . $title . $after_title; ?>
			<ul>
				<li><strong>Remove PaukerStats and use Pauker instead.</strong></li>
			</ul>
		<?php echo $after_widget; ?>

<?php
	}

	function widget_paukerstats_control() {
		echo "OBSOLETE, please remove and use Pauker Plugin instead.";
	}
	$ops = array('classname' => 'widget_paukerstats', 'description' => "Shows the stats of a given Pauker data file" );
	wp_register_sidebar_widget('paukerstats', 'PaukerStats', 'widget_paukerstats', $widget_ops);
	wp_register_widget_control('paukerstats', 'PaukerStats', 'widget_paukerstats_control' );
}
add_action('widgets_init', 'widget_paukerstats_register');

?>
