<?php
Class Company{
	static function save(){
		$defaultLogo = "defaultlogophoto.png";
		$defaultCover = "defaultcoverphoto.jpg";

		$logo_name = (!empty($_FILES["strLogoFile"]['name']) ? date('U')."_".$_FILES["strLogoFile"]["name"] : $defaultLogo);
		$cover_name = (!empty($_FILES["strCoverFile"]['name']) ? date('U')."_".$_FILES["strCoverFile"]["name"] : $defaultCover);

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
			'".utf8_encode($logo_name)."',
			'".utf8_encode($cover_name)."',
			'".utf8_encode($_POST["nUserID"])."'
		)";
		
		$logo_type = ($logo_name == $defaultLogo)?'image/png':$_FILES["strLogoFile"]["type"];
		$cover_type = ($cover_name == $defaultCover )?'image/jpeg':$_FILES["strCoverFile"]["type"];

		if(($logo_type == 'image/png' || $logo_type == 'image/jpeg') && ($cover_type == 'image/png' || $cover_type == 'image/jpeg')){
			
			if($logo_name != $defaultLogo){
				$logo_tmp_name = $_FILES["strLogoFile"]["tmp_name"];
				DB::con()->saveImgOnServer($logo_name, $logo_tmp_name);
			}
			if($cover_name != $defaultCover){
				$cover_tmp_name = $_FILES["strCoverFile"]["tmp_name"];
				DB::con()->saveImgOnServer($cover_name, $cover_tmp_name);
			}

			$nCompanyID = DB::con()->runSQL("insertNew", $sql);

			$valuesToInsert = "";
			foreach($_POST["categories"] as $category){
				$valuesToInsert .= empty($valuesToInsert)?(" ('".$nCompanyID."', '".$category."')"):(", ('".$nCompanyID."', '".$category."')");
			}
			$sql = "INSERT INTO companies_categories(nCompanyID, nCategoryID)
					VALUES".$valuesToInsert ;

			DB::con()->runSQL("insertNew", $sql);
		}
		else {			
			$_SESSION['lastcompanyentry'] = $_POST;
			header('location: index.php?route=pages.dashboard&edit=addservice&error=file');
		}
		header('location: index.php?route=pages.dashboard&edit=services');
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
			companies.nUserID,
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

	static function getForForm($nCompanyID, $nUserID){
		$comapny = self::getOne($nUserID);
		if($comapny['nUserID'] == $nUserID){
			echo "Tu memo";
		}
		die;
	}
}
?>