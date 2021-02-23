<?php
/*
Plugin Name: Docker Enviornment Settings
Plugin URI: https://github.com/web-dev-media/wordpress-easy-docker-development
Description: Tut Dinge für die lokale Docker-Umgebung
Version: 1.0.0
Author:
Author URI:
*/

/** add admin user for dev environment */
if(DOCKER_ENV) {
	add_action('init', function () {
		$user  = 'admin';
		$pass  = 'admin';
		$email = 'admin@example.com';
		//if a username with the email ID does not exist, create a new user account
		if (!username_exists($user) && !email_exists($email)) {
			$user_id = wp_create_user($user, $pass, $email);
			$user    = new WP_User($user_id);
			//Set the new user as a Admin
			$user->set_role('administrator');
		}
	} );

	add_action( 'phpmailer_init', function ( PHPMailer $phpmailer ){
			$phpmailer->Host = 'mailhog';
			$phpmailer->Port = 1025;
			$phpmailer->IsSMTP();
	} );
}
