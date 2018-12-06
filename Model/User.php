<?php
Class Member
{
	static function saveNewMember($arrMemberInfo)
	{
		//insert the SQL to SAVE NEW MEMBER here uses $arrMemberInfo[''] instead $_POST['']
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