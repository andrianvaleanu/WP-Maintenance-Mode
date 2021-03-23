<?php
/**
 * Login form
 *
 * @version 2.4.0
 */

defined( 'ABSPATH' ) || exit;
?>
<form name="loginform" class="login_form" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
	<input type="text" placeholder="username" name="log" />
	<input type="password" placeholder="password" name="pwd" />

	<?php if ( ! empty( $redirect ) ) { ?>
		<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect ); ?>" />
	<?php } ?>
	<input type="submit" value="<?php _e( 'Login', 'wp-maintenance-mode' ); ?>" />
</form>
