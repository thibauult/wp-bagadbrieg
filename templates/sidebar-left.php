<?php
wp_nav_menu(array('theme_location' => 'principal', 'menu_id' => 'menu-principal'));

if (is_user_logged_in()) {
    wp_nav_menu(array('theme_location' => 'membres'));
}
