<?php


	class Sender {
		private $mailConfig = [];
		private $mail = null;

		public function __construct(){


			$this->mail = new PHPMailer;
			return $this;
		}

		public function send($params)
		{

			if(isset($params['to']) && count($params['to'])==2)
			{
				$subject = (isset($params['subject'])) ? $params['subject'] : 'Test Subject';
				$body = (isset($params['body'])) ? $params['body'] : 'Test Message';

				$this->mail->Subject = $subject;
				$this->mail->Body    = $body;
				$this->mail->addAddress($params['to'][0],$params['to'][1]);     // Add a recipient

				if(!$this->mail->send()) {


				    echo 'Message could not be sent.<br/>';
				    echo 'Mail Error: ' . $this->mail->ErrorInfo;
				} else {
				    echo 'Message has been sent';
				}
			}
			else
			{
				echo 'Please make sure to specifiy to.';
			}


		}

		public function setConfig($getConfig)
		{

			if($getConfig['smtp']==true)
				$this->mail->isSMTP();

			$this->mail->Host = $getConfig['host'];

			if($getConfig['smtp_auth']==true)
			{
				$this->mail->SMTPAuth = true;
				$this->mail->Username = $getConfig['username'];
				$this->mail->Password = $getConfig['password'];
				$this->mail->SMTPSecure = $getConfig['smtp_secure'];
			}
			
			$this->mail->port = $getConfig['port'];

			
			if(isset($getConfig['from']))
				$this->mail->setFrom($getConfig['from'][0],$getConfig['from'][1]);

			if($getConfig['html']==true)
				$this->mail->isHTML(true);

			return $this;

			

		}
			

	}
