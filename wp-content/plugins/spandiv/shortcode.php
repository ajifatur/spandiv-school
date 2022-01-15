<?php

$table_settings = $wpdb->prefix . 'settings';
$result = $wpdb->get_results("SELECT * FROM $table_settings");
foreach($result as $print) {

function phone($atts) {
    $Content = echo "$print->telephone";;
    return $Content;
}

add_shortcode('no_telephone', 'phone');