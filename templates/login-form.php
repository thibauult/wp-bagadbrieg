<?php

if (is_user_logged_in()) {
    global $current_user;
	wp_get_current_user();
?>

    <form id="logout-form" class="logout">
        <h3 class="username">- <?php echo $current_user->display_name; ?> -</h3>
        <a href="<?php echo wp_logout_url(home_url()); ?>">se d&eacute;connecter</a>
    </form>

<?php } else { ?>

    <div class="login-form">

        <?php
        $args = array(
            'echo' => true,
            'redirect' => home_url('/'),
            'form_id' => 'login-form',
            'label_username' => __('Username'),
            'label_password' => __('Password'),
            'label_remember' => __('Remember Me'),
            'label_log_in' => __('Log In'),
            'id_username' => 'user_login',
            'id_password' => 'user_pass',
            'id_remember' => 'rememberme',
            'id_submit' => 'wp-submit',
            'remember' => true,
            'value_username' => NULL,
            'value_remember' => true
        );
        wp_login_form($args);
        ?>

        <a href="<?php echo wp_lostpassword_url(); ?>">mot de passe oublié</a>
        <a href="<?php echo wp_lostpassword_url(); ?>">identifiant oublié</a>

    </div>

<?php } ?>