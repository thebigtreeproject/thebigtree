<?php
Class Company{
	static function save(){
		$sql = "INSERT INTO companies(
			strName,
			strAddress,
			strEmail,
			nPhone,
			strDescription,
			nPrice,
			strLogoFile,
			strCoverFile,
			nUserID
		)
		VALUES(
			'".addslashes($_POST["strName"])."',
			'".addslashes($_POST["strAddress"])."',
			'".addslashes($_POST["strEmail"])."',
			'".addslashes($_POST["nPhone"])."',
			'".addslashes($_POST["strDescription"])."',
			'".addslashes($_POST["nPrice"])."',
			'".addslashes((isset($_POST["strLogoFile"])?$_POST["strLogoFile"]:"defaultlogophoto.jpg"))."',
			'".addslashes((isset($_POST["strCoverFile"])?$_POST["strCoverFile"]:"defaultcoverphoto.jpg"))."',
			'".addslashes($_POST["nUserID"])."'
		)";
		$nCompanyID = DB::con()->runSQL("insertNew", $sql);
														   
		$valuesToInsert = "";
		foreach($_POST["categories"] as $category){
			$valuesToInsert .= empty($valuesToInsert)?(" ('".$nCompanyID."', '".$category."')"):(", ('".$nCompanyID."', '".$category."')");
		}
		$sql = "INSERT INTO companies_categories(nCompanyID, nCategoryID)
				VALUES".$valuesToInsert ;
		DB::con()->runSQL("insertNew", $sql);
		
		
		header('location: index.php?route=pages.companies&nCID='.$nCompanyID);
	}
}
?>