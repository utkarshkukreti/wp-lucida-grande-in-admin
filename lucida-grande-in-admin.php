<?php
/*
Plugin Name: Lucida Grande in Admin
Plugin URI: http://wordpress.org/extend/plugins/lucida-grande-in-admin
Description: Simple plugin to make Lucida Grande the default font in the admin (wp-admin) panel.
Author: Utkarsh Kukreti
Version: 1.0
Author URI: http://utkar.sh
*/

function lucida_grande_in_admin_admin_head() {
	echo '<style type="text/css"> * { font-family: Lucida Grande; } </style>';
}

add_action('admin_head', 'lucida_grande_in_admin_admin_head');
