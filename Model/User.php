<?php
Class User
{
	static function saveNewMember($arrMemberInfo)
	{
		$sql = "INSERT INTO users (
				id, 
				strFirstName,
				strLastName,
				strEmail,
				strZipCode,
				strAddress,
				strPassword)
			VALUES (
				'".utf8_encode($_POST['strFirstName'])."', 
				'".utf8_encode($_POST['strLastname'])."',
				'".utf8_encode($_POST['strEmail'])."',
				'".utf8_encode($_POST['strZipCode'])."',
				'".utf8_encode($_POST['strAdress'])."',
				'".utf8_encode($_POST['strPassword'])."')";
		DB::con()->runSQL("insertNew", $sql);			
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
}
?>