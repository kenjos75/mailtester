<?php

	
	
	return $config = [
		'smtp' => true,
		'host' => 'smtp.gmail.com',
		'smtp_auth' => true,
		'username' => 'your@gmail.com',
		'password' => 'yourpassword',
		'smtp_secure' => 'tls',
		'port' => 465,
		'html' => true,
		'from' => ['your@gmail.com','Mailer']
	]; 
	
	/*
	return $config = [
		'smtp' => true,
		'host' => 'smtp.sendgrid.net',
		'smtp_auth' => true,
		'username' => 'xemtech',
		'password' => 'x3Mtch#send',
		'smtp_secure' => 'tls',
		'port' => 465,
		'html' => true,
		'from' => ['support@pulpmeter.com','Mailer']
	];

	*/

?>