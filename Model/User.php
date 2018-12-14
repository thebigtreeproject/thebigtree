<?php
Class User
{
	static function saveNewMember($arrMemberInfo)
	{
		// insert the new user information
		$sql = "INSERT INTO users (
				id, 
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
			$emailSent = this -> send_confirmation_on_email($code);
			if($emailSent){
				header('location: index.php/router=pages.home');
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
	function send_confirmation_on_email($code){
		Email->registerConfirtmation();
	}
}
?>