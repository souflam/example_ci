<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'CI Bootstrap 3',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(
			'assets/js/jquery-1.8.3.min.js',
			'assets/js/jquery.bxslider.min.js',
			'assets/js/jquery.colorbox-min.js',
			'assets/js/custom.select.js',
			'assets/js/jquery.validate.min.js',
			'assets/js/jquery.validate_fr.js',
			'assets/js/jquery.BlackAndWhite.min.js',
			'assets/js/classie.js',
			'assets/js/owl.carousel.js',
			'assets/js/script.js',
			'assets/js/classie.js',
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/style/reset.css',
			'assets/style/font-awesome.css',
			'assets/style/jquery.bxslider.css',
			'assets/style/colorbox.css',
			'assets/style/owl.carousel.css',
			'assets/style/owl.theme.css',
			'assets/style/style.css',
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
		'default'		=> '',
		'autoload'		=> array('general'),
		'available'		=> array(
		)
	),

	// Google Analytics User ID
	'ga_id' => '',

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
		),
	),

	// Login page
	'login_url' => '',

	// Restricted pages
	'page_auth' => array(
	),

	// Email config
	'email' => array(
		'from_email'		=> '',
		'from_name'			=> '',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';