<?php
	class User
	{
		static function save()
		{
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
					'".utf8_encode($_POST['strFirstName'])."', 
					'".utf8_encode($_POST['strLastname'])."',
					'".utf8_encode($_POST['strEmail'])."',
					'".utf8_encode($_POST['strZipCode'])."',
					'".utf8_encode($_POST['strAdress'])."',
					'".utf8_encode($_POST['strPassword'])."',
					0)";
			$userID = DB::con()->runSQL("insertNew", $sql);
			$_SESSION['userInfo'] = $_POST;		
			$_SESSION['userInfo']['id'] = $userID;		
			$code = Code::saveCode();
			if($code){
				$emailSent = self::send_confirmation_on_email($code);
				if($emailSent){
					header('location: index.php/router=pages.home');
				}
			}
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
		
		static function checkPassword(){
			// insert right SQL to check the password and user name
			DB::con()->runSQL("getSingleData", $sql);			
		}
		
		static function getMemberInfo($arrItems){
			// insert SQL to get information to fill forms
			return DB::con()->runSQL("getSingleData", $sql);	
		}	
		
		static function getMemberPurchase(){
			// get alll purchase linked to this user
			return DB::con()->runSQL("getAllData", $sql);	
		}
		
		static function send_confirmation_on_email($code){
			Email::registerConfirtmation($code);
		}
	}
?>