<?php 
class Email {
    static function registerConfirtmation(){
       $to = $_SESSION['userInfo']['strEmail'];

		$subject = 'Email confirmation'

		$message = 
			
		$email_from = "Testing";
		$full_name = 'The Big Tree';
		$from_mail = $full_name.'<'.$email_from.'>';
		$from = $from_mail;
		$headers = "X-Mailer: PHP/".phpversion();
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		$headers .= 'From: ' . $from_email . "\r\n";       
		mail($to,$subject,$message,$headers);
    }
}
?>