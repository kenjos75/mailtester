<?php
	include('class.smtp.php');
	include('class.phpmailer.php');
	include('class.sender.php');

	$config = include('config.php');
	$s = new Sender;
	
	$s->setConfig($config)
	  ->send([
	  	'subject' => 'Here is the subject',
		'body' => 'This is the message',
		'to' => ['kennethjohnrosales143@gmail.com','Kenneth John Rosales']
	  ]);


?>