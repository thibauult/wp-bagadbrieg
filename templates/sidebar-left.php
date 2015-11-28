<?php
wp_nav_menu(array('theme_location' => 'principal'));

if (is_user_logged_in()) {
    wp_nav_menu(array('theme_location' => 'membres'));
}
