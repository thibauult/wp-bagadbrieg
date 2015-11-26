<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>

<div class="container" role="document">
    <div class="row">

        <div class="col-md-3 w-20 visible-xs hidden-md collapse" id="collapseMenu">
            <aside><?php include Wrapper\sidebar_left_path(); ?></aside>
        </div>
        <div class="col-md-3 w-20 hidden-xs visible-sm">
            <aside><?php include Wrapper\sidebar_left_path(); ?></aside>
        </div>
        <div class="col-md-6 w-60">
            <main><?php include Wrapper\template_path(); ?></main>
        </div>
        <div class="col-md-3 w-20">
            <aside><?php include Wrapper\sidebar_right_path(); ?></aside>
        </div>

    </div>
</div>

<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>
