<?php
/*
Plugin Name: Requirements Check
Plugin URI: http://www.press75.com
Description: Checks your WordPress hosting environment to verify system requirements for Press75.com WordPress themes.
Version: 0.6
Author: rocketgenius
Author URI: http://www.rocketgenius.com
*/

define("RG_CURRENT_PAGE", basename($_SERVER['PHP_SELF']));

if(RG_CURRENT_PAGE == "plugins.php"){
    add_action('after_plugin_row_requirements-check/requirements_check.php', 'requirements_message');
}

function requirements_message(){
    global $wpdb;

    $is_php_valid = version_compare(phpversion(), '5.0.0', '>');
    $is_gd_valid = extension_loaded('gd') && function_exists('gd_info');
    $is_mysql_valid = version_compare($wpdb->db_version(), '5.0.0', '>');
    $is_wp_valid = version_compare(get_bloginfo("version"), '2.8.0', '>');
    $meets_requirements = ($is_php_valid && $is_gd_valid && $is_mysql_valid && $is_wp_valid);
    $class = $meets_requirements ? "update-message" : "error"; 

    if($meets_requirements){
        $message_head = "<div class='update-message' style='background-color:#ecfcde; border:1px solid #a7c886; text-align:left;'>";
        $top_message_head = "<div class='updated' style='padding:3px; background-color:#ecfcde; border:1px solid #a7c886; text-align:left;'>";

        $message = "Congratulations! your hosting envoronment is compatible! <a target='_blank' href='http://www.press75.com'>Head back to Press75.com</a></div>";
    }
    else{
        $message_head = "<h2 style='display:none;'></h2><div class='error' style='margin:5px; padding:3px; text-align:left;'>";
        $top_message_head = "<div class='error' style='margin:5px; padding:3px; text-align:left;'>";

        $message = "Your host is not compatible with Press75.com WordPress Themes. The following items must be upgraded:<br/> ";

        if(!$is_php_valid){
            $message .= " - <strong>PHP</strong> (Current version: " .  phpversion() . ", Required: 5.0)<br/> ";
        }
        
        if(!$is_gd_valid){
            $message .= " - <strong>GD</strong> (GD Not Found)<br/> ";
        }

        if(!$is_mysql_valid){
            $message .= " - <strong>MySql</strong> (Current version: " .  $wpdb->db_version() . ", Required: 5.0)<br/> ";
        }

        if(!$is_wp_valid){
            $message .= " - <strong>Wordpress</strong> (Current version: " .  get_bloginfo("version") . ", Required: 2.8)<br/> ";
        }

        $message .= "</div>";
    }
    echo '</tr><tr class="plugin-update-tr"><td colspan="5" class="plugin-update">' . $top_message_head . $message . $message_head . $message . '</td></tr>';

}