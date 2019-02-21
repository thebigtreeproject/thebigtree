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
			header('location: index.php?route=pages.dashboard&error=file');
		}
		header('location: index.php?route=pages.dashboard');
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
			GROUP_CONCAT(companies_categories.nCategoryID) as nCategoriesID		
		FROM 
			companies 
			LEFT JOIN companies_categories ON companies.id=companies_categories.nCompanyID 
			LEFT JOIN categories ON categories.id=companies_categories.nCategoryID
		WHERE
			companies.id=".$nCompanyID;
		return DB::con()->runSQL("getSingleData", $sql);
	}

	static function getForForm(){
		$nCompanyID = $_POST['svcid'];
		$nUserID = $_SESSION['user']['id'];

		$comapny = self::getOne($nCompanyID);
		if($comapny['nUserID'] == $nUserID){
			echo json_encode($comapny);
			$_SESSION['updatingCompanyID'] = $nCompanyID;
		}
		else{
			echo "Something went wrong please try again";
		}
		die;
	}

	static function update(){
		$nCompanyID = $_SESSION['updatingCompanyID'];
		//find the id of the owner of the company
		$sql = "SELECT companies.nUserID FROM companies WHERE companies.id ='".$nCompanyID."'";
		$ownerID = DB::con()->runSQL("getSingleData", $sql);		
		echo 'owner -->'.$sql;
		//get the id of the user that is loged
		$userID = $_SESSION['user']['id'];

		//check if the user have permission to change this values
		if($userID == $ownerID){
			//update the post informations of the company
			$sql = "UPDATE companies SET
				strName ='".utf8_encode($_POST["strName"])."',
				strAddress ='".utf8_encode($_POST["strAddress"])."',
				strEmail ='".utf8_encode($_POST["strEmail"])."',
				nPhone ='".utf8_encode($_POST["nPhone"])."',
				strDescription ='".utf8_encode($_POST["strDescription"])."',
				nPrice ='".utf8_encode($_POST["nPrice"])."'
				WHERE
				companies.id = $nCompanyID";
			DB::con()->runSQL("update", $sql);			
			echo 'new infos -->'.$sql;

			//if logo changed save the new file and update the name
			if(!empty($_FILES["strLogoFile"]['name'])){
				$logo_name = date('U')."_".$_FILES["strLogoFile"]["name"];
				$logo_type = $_FILES["strLogoFile"]["type"];
				if($logo_type == 'image/png' || $logo_type == 'image/jpeg'){
					$logo_tmp_name = $_FILES["strLogoFile"]["tmp_name"];
					DB::con()->saveImgOnServer($logo_name, $logo_tmp_name);
					$sql = "UPDATE companies SET
						strLogoFile ='".utf8_encode($logo_name)."'
					WHERE
						companies.id = $nCompanyID";
					DB::con()->runSQL("update", $sql);
					echo 'new logo -->'.$sql;
				}
			}

			//if coverimage changed save the new file and update the name
			if(!empty($_FILES["strCoverFile"]['name'])){
				$cover_name = date('U')."_".$_FILES["strCoverFile"]["name"];
				$cover_type = $_FILES["strCoverFile"]["type"];
				if($cover_type == 'image/png' || $cover_type == 'image/jpeg'){
					$cover_tmp_name = $_FILES["strCoverFile"]["tmp_name"];
					DB::con()->saveImgOnServer($cover_name, $cover_tmp_name);
					$sql = "UPDATE companies SET
						strCoverFile ='".utf8_encode($cover_name)."'
					WHERE
						companies.id = $nCompanyID";
					DB::con()->runSQL("update", $sql);
					echo 'new cover -->'.$sql;
				}
			}

			//update midtable
			//clean the old records 
			$sql = "DELETE * FROM companies_categories WHERE nCompanyID='".$nCompanyID."'";
			DB::con()->runSQL("delete", $sql);			
			echo 'delete categories -->'.$sql;

			//insert new data
			$valuesToInsert = "";
			foreach($_POST["categories"] as $category){
				$valuesToInsert .= empty($valuesToInsert)?(" ('".$nCompanyID."', '".$category."')"):(", ('".$nCompanyID."', '".$category."')");
			}
			$sql = "INSERT INTO companies_categories(nCompanyID, nCategoryID)
					VALUES".$valuesToInsert ;

			DB::con()->runSQL("insertNew", $sql);
			echo 'new categories -->'.$sql;

			//clean the id of the company from the session
			$_SESSION['updatingCompanyID'] = '';
		}
	}
}
?>