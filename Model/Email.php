<?php 
	class Email {
		static function registerConfirtmation($code){
		   $to = $_SESSION['userInfo']['strEmail'];

			$subject = 'Email confirmation';
			
			ob_start();
			
			include("Views/confirmEmail-view.php");
			$message = ob_get_contents();
			ob_clean();
			
			echo $message;
			die;
			
			$email_from = "Testing";
			$full_name = 'The Big Tree';
			$from_email = $full_name.'<'.$email_from.'>';
			$from = $from_email;
			$headers = "X-Mailer: PHP/".phpversion();
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			$headers .= 'From: ' . $from_email . "\r\n";       
			mail($to,$subject,$message,$headers);
		}
	}
?>