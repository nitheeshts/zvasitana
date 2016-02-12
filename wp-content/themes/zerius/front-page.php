<?php get_header(); 

if ( get_option( 'show_on_front' ) == 'page' ) {
	
    include( get_page_template() );
	
}else {

	if(isset($_POST['submitted']) && !defined('PIRATE_FORMS_VERSION') && !shortcode_exists( 'pirate_forms' ) ) :

			/* recaptcha */
			
			$zerif_contactus_sitekey = get_theme_mod('zerif_contactus_sitekey');

			$zerif_contactus_secretkey = get_theme_mod('zerif_contactus_secretkey');
			
			$zerif_contactus_recaptcha_show = get_theme_mod('zerif_contactus_recaptcha_show');

			if( isset($zerif_contactus_recaptcha_show) && $zerif_contactus_recaptcha_show != 1 && !empty($zerif_contactus_sitekey) && !empty($zerif_contactus_secretkey) ) :

		        $captcha;

		        if( isset($_POST['g-recaptcha-response']) ){

		          $captcha=$_POST['g-recaptcha-response'];

		        }

		        if( !$captcha ){

		          $hasError = true;    
		          
		        }

		        $response = wp_remote_get( "https://www.google.com/recaptcha/api/siteverify?secret=".$zerif_contactus_secretkey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'] );

		        if($response['body'].success==false) {

		        	$hasError = true;

		        }

	        endif;

			/* name */

			if(trim($_POST['myname']) === ''):

				$nameError = __('* Please enter your name.','zerif-lite');

				$hasError = true;

			else:

				$name = trim($_POST['myname']);

			endif;

			/* email */

			if(trim($_POST['myemail']) === ''):

				$emailError = __('* Please enter your email address.','zerif-lite');

				$hasError = true;

			elseif (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['myemail']))) :

				$emailError = __('* You entered an invalid email address.','zerif-lite');

				$hasError = true;

			else:

				$email = trim($_POST['myemail']);

			endif;

			/* subject */

			if(trim($_POST['mysubject']) === ''):

				$subjectError = __('* Please enter a subject.','zerif-lite');

				$hasError = true;

			else:

				$subject = trim($_POST['mysubject']);

			endif;

			/* message */

			if(trim($_POST['mymessage']) === ''):

				$messageError = __('* Please enter a message.','zerif-lite');

				$hasError = true;

			else:

				$message = stripslashes(trim($_POST['mymessage']));

			endif;

			/* send the email */

			if(!isset($hasError)):

				$zerif_contactus_email = get_theme_mod('zerif_contactus_email');
				
				if( empty($zerif_contactus_email) ):
				
					$emailTo = get_theme_mod('zerif_email');
				
				else:
					
					$emailTo = $zerif_contactus_email;
				
				endif;

				if(isset($emailTo) && $emailTo != ""):

					if( empty($subject) ):
						$subject = 'From '.$name;
					endif;

					$body = "Name: $name \n\nEmail: $email \n\n Subject: $subject \n\n Message: $message";

					/* FIXED HEADERS FOR EMAIL NOT GOING TO SPAM */
					$zerif_admin_email = get_option( 'admin_email' );
					$zerif_sitename = strtolower( $_SERVER['SERVER_NAME'] );

					function zerif_is_localhost() {
						$zerif_server_name = strtolower( $_SERVER['SERVER_NAME'] );
						return in_array( $zerif_server_name, array( 'localhost', '127.0.0.1' ) );
					}
					
					if ( zerif_is_localhost() ) {
					
						$headers = 'From: '.$name.' <'.$zerif_admin_email.'>' . "\r\n" . 'Reply-To: ' . $email;
						
					} else {
					
						if ( substr( $zerif_sitename, 0, 4 ) == 'www.' ) {
							$zerif_sitename = substr( $zerif_sitename, 4 );
						}
						
						$headers = 'From: '.$name.' <wordpress@'.$zerif_sitename.'>' . "\r\n" . 'Reply-To: ' . $email;
						
					}

					wp_mail($emailTo, $subject, $body, $headers);

					$emailSent = true;

				else:

					$emailSent = false;

				endif;

			endif;

		endif;

	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');

	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):

		get_template_part( 'sections/big_title' );

	endif;

?>



<div id="content" class="site-content">

<?php

	/* OUR FOCUS SECTION */

	$zerif_ourfocus_show = get_theme_mod('zerif_ourfocus_show');

	if( isset($zerif_ourfocus_show) && $zerif_ourfocus_show != 1 ):

		get_template_part( 'sections/our_focus' );

	endif;

	/* RIBBON WITH BOTTOM BUTTON */

	get_template_part( 'sections/ribbon_with_bottom_button' );

	/* ABOUT US */

	$zerif_aboutus_show = get_theme_mod('zerif_aboutus_show');

	if( isset($zerif_aboutus_show) && $zerif_aboutus_show != 1 ):

		get_template_part( 'sections/about_us' );

	endif;

	/* OUR TEAM */

	$zerif_ourteam_show = get_theme_mod('zerif_ourteam_show');

	if( isset($zerif_ourteam_show) && $zerif_ourteam_show != 1 ):

		get_template_part( 'sections/our_team' );

	endif;

	/* TESTIMONIALS */

	$zerif_testimonials_show = get_theme_mod('zerif_testimonials_show');

	if( isset($zerif_testimonials_show) && $zerif_testimonials_show != 1 ):

		get_template_part( 'sections/testimonials' );

	endif;

	/* RIBBON WITH RIGHT SIDE BUTTON */

	get_template_part( 'sections/ribbon_with_right_button' );

	/* LATEST NEWS */
	$zerif_latestnews_show = get_theme_mod('zerif_latestnews_show');

	if( isset($zerif_latestnews_show) && $zerif_latestnews_show != 1 ):

		get_template_part( 'sections/latest_news' );

	endif;

	
			?>
			
			<?php


}
get_footer(); ?>
