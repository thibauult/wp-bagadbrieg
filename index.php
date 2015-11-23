<?php
if(is_front_page()) {
    get_template_part('templates/content', 'home');
}
else if(is_category()) {
    get_template_part('templates/content', 'category');
}
else {
    echo 'UNKNOWN PAGE TYPE';
}