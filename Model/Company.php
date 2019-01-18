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
			'".utf8_encode($_POST["strName"])."',
			'".utf8_encode($_POST["strAddress"])."',
			'".utf8_encode($_POST["strEmail"])."',
			'".utf8_encode($_POST["nPhone"])."',
			'".utf8_encode($_POST["strDescription"])."',
			'".utf8_encode($_POST["nPrice"])."',
			'".utf8_encode((isset($_POST["strLogoFile"])?$_POST["strLogoFile"]:"defaultlogophoto.jpg"))."',
			'".utf8_encode((isset($_POST["strCoverFile"])?$_POST["strCoverFile"]:"defaultcoverphoto.jpg"))."',
			'".utf8_encode($_POST["nUserID"])."'
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
	static function getOne($nCompanyID){
			$sql = "SELECT 
				companies.id,
				companies.strName,
				companies.strAddress,
				companies.strEmail,
				companies.nPhone,
				companies.strDescription,
				companies.nPrice,
				companies.strLogoFile,
				companies.strCoverFile,
				companies_categories.nCategoryID,
				categories.strName as strCategoryName				
			FROM 
				companies 
				LEFT JOIN companies_categories ON companies.id=companies_categories.nCompanyID 
				LEFT JOIN categories ON categories.id=companies_categories.nCategoryID
			WHERE
				companies.id=".$nCompanyID;
			return DB::con()->runSQL("getSingleData", $sql);
		}
	}
?>