<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}
?>

<?php if ( is_user_logged_in() ) {?>

    <div id="tribe-events-pg-template">
        <?php tribe_events_before_html(); ?>
        <?php tribe_get_view(); ?>
        <?php tribe_events_after_html(); ?>
    </div> <!-- #tribe-events-pg-template -->

<?php } else { ?>
    <main style="padding: 10px;">
        <h3>Vous devez &ecirc;tre connect&eacute; pour acc&eacute;der cette page !</h3>
        <a class="btn btn-default" href="<?php echo wp_login_url(); ?>" title="Se connecter">Se connecter</a>
    </main>
<?php }