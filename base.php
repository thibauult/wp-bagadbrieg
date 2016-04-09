<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
    <?php include_once("analytics_tracking.php") ?>

    <!--[if IE]>
    <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
        browser</a> to improve your experience.', 'sage'); ?>
    </div>
    <![endif]-->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=484103225110093";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <?php
        do_action('get_header');
        get_template_part('templates/header');
    ?>

    <div class="container" role="document">
        <div class="row">

            <div class="col-md-3 w-20">
                <aside class="visible-xs visible-sm hidden-md">
                    <div class="collapse" id="collapseMenu">
                        <?php include Wrapper\sidebar_left_path(); ?>
                    </div>
                </aside>
                <aside class="hidden-xs hidden-sm visible-md-*">
                    <?php include Wrapper\sidebar_left_path(); ?>
                    <?php get_template_part('templates/login', 'form'); ?>
                </aside>
            </div>
            <div class="col-md-6 w-60">
                <main><?php include Wrapper\template_path(); ?></main>
            </div>
            <div class="col-md-3 w-20">
                <aside>
                    <br class="visible-xs visible-sm hidden-md">
                    <?php include Wrapper\sidebar_right_path(); ?>
                    <span class="visible-xs visible-sm hidden-md"><?php get_template_part('templates/login', 'form'); ?></span>
                </aside>
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
