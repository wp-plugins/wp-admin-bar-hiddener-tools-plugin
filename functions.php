<?php
/*
Plugin Name: wp admin bar hiddener tools plugin
Plugin URI: http://www.wordpress.org/plugins/wp-admin-bar-hiddener-tools-plugin
Description: This is just any wordpress site any visitor and Of all users ‍hidden wp admin bar.
Version: 1.1
Author: Md Abul Bashar
Author URI: http://www.pchelpcenterbd.com/
*/

add_action( 'admin_print_scripts-profile.php', 'hide_admin_bar_prefs' );
function hide_admin_bar_prefs() { ?>
<style type="text/css">
	.show-admin-bar {display: none;}
</style>
<?php
}
add_filter('show_admin_bar', '__return_false');

?>