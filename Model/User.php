<?php
	class User
	{
		static function save()
		{
			//check if the email is already in use
			$emailInUse = self::checkEmailInUse(utf8_encode($_POST['strEmail']));
			if(!$emailInUse){	
				// insert the new user information
				$sql = "INSERT INTO users (
						strFirstName,
						strLastName,
						strEmail,
						strZipCode,
						strAddress,
						strPassword,
						bActivated)
					VALUES (
						'".addslashes(utf8_encode($_POST['strFirstName']))."', 
						'".addslashes(utf8_encode($_POST['strLastname']))."',
						'".addslashes(utf8_encode($_POST['strEmail']))."',
						'".addslashes(utf8_encode($_POST['strZipCode']))."',
						'".addslashes(utf8_encode($_POST['strAdress']))."',
						'".password_hash($_POST['strPassword'], PASSWORD_DEFAULT)."',
						0)";
				$userID = DB::con()->runSQL("insertNew", $sql);
				$_SESSION['userInfo'] = $_POST;		
				$_SESSION['userInfo']['id'] = $userID;		
				$code = Code::saveCode();
				if($code){
					$emailSent = self::send_confirmation_on_email($code);
					if($emailSent){
						header('location: index.php?route=pages.home');
					}
				}
			}
			else{
				header('location: index.php?route=pages.login&error=email');
			}
		}
		static function checkEmailInUse($email){
			$sql = "SELECT users.strEmail FROM users WHERE users.strEmail='".$email."'";
			$arrEmails = DB::con()->runSQL("getSingleData", $sql);
			$inUSe = ($arrEmails) ? true : false;
			return $inUSe;
		}
		static function get($userID)
		{
			// get the user informations
			$sql = "SELECT * FROM users WHERE users.id='".$userID."'";
			return $userID = DB::con()->runSQL("getSingleData", $sql);
		}

		static function update()
		{
			// insert the new user information
			$sql = "UPDATE users SET
					strFirstName='".addslashes(utf8_encode($_POST['strFirstName']))."',
					strLastName='".addslashes(utf8_encode($_POST['strLastname']))."',
					strEmail='".addslashes(utf8_encode($_POST['strEmail']))."',
					strZipCode='".addslashes(utf8_encode($_POST['strZipCode']))."',
					strAddress='".addslashes(utf8_encode($_POST['strAddress']))."'
				WHERE
					users.id='".$_SESSION['user']['id']."'";
			
			$userID = DB::con()->runSQL("update", $sql);
			
			$user = self::get($_SESSION['user']['id']);
			$_SESSION['user'] = $user;

			header('location: ./?route=pages.dashboard&success=profileupdate');
		}
		
		static function confirm(){
			$confInfo = explode('.', $_GET['cd']);
			$code = $confInfo[0];//Code form URL $_GET['cd']
			$nUserID = $confInfo[1];//User ID from URL $_GET['cd']
			
			$userID = Code::checkCode($code)['nUserID'];//User ID from Data Base relative to the code provided
			
			
			if($userID == $nUserID){
				$sql = 'UPDATE users SET users.bActivated=1 WHERE users.id='.$userID;
				DB::con()->runSQL('update', $sql);
				
				$sql = "SELECT users.bActivated FROM users WHERE users.id=".$userID;
				$userActivated = DB::con()->runSQL('getSingleData', $sql)['bActivated'];
				
				if ($userActivated){
					$sql = 'DELETE FROM codes WHERE codes.nUserID='.$userID;
					DB::con()->runSQL('delete', $sql);
					header('location: index.php');
				}
			}
		}
		
		static function login(){
			$sql = "SELECT * FROM users WHERE users.strEmail='".$_POST['strEmail']."'";
			$user = DB::con()->runSQL("getSingleData", $sql);
			$userPass = $user['strPassword'];
			$_SESSION['loginEntries'] = array('strEmail' => $_POST['strEmail'], 'strPassword' => $_POST['strPassword']);
			if(password_verify($_POST['strPassword'], $userPass)){
				$_SESSION['user'] = $user;
				header('location: ./');
			}
			else{
				header('location: ./?route=pages.login&error=login');
			}
		}

		static function logout(){
			$_SESSION = [];
			session_destroy();
			header('location: ./');
		}
		
		static function submitTestmonial(){
			$sql = "INSERT INTO testimonials(strTestimonial, nUserID, nDateUTC) VALUES ('".addslashes($_POST['strTestimonial'])."','".$_POST['nUserID']."','".$_POST['nDate']."')";
			echo DB::con()->runSQL("insertNew", $sql);
			echo $sql;
			die;
		}
		
		static function send_confirmation_on_email($code){
			$emailSent = Email::registerConfirtmation($code);
			if($emailSent){
				return true;
			}
		}
	}
?>