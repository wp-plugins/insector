<?php
/*
Plugin Name: Bug
Description: Display a fly on the website
Author: Kuba Mikita
Author URI: http://www.wpart.pl
Version: 1.0
License: GPL2
*/

/*

    Copyright (C) 2015  Kuba Mikita  hello@underdev.it

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

define( 'BUG_URL', plugin_dir_url( __FILE__ ) );

function bug_enqueue_script() {

	wp_enqueue_script( 'bug', BUG_URL . 'bug-min.js', false, null, true );

	wp_localize_script( 'bug', 'settings', array(
		'img_url' => BUG_URL
	) );

}
add_action( 'wp_enqueue_scripts', 'bug_enqueue_script' );