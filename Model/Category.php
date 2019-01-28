<?php 
	class Category {
		static function getAllCategories(){
			$sql = "SELECT * FROM categories";
			return DB::con()->runSQL("getAllData", $sql);
		}
		static function getAllServices($nCatID){
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
				companies_categories.nCategoryID=".$nCatID;
			return DB::con()->runSQL("getSingleData", $sql);
		}
		static function getOneForPager($nCatID){
			$sql = "SELECT 
				categories.strName,
				categories.strDescription,
				categories.strCoverFile,
				categories.strCoverDescription
			FROM 
				categories 
			WHERE
				categories.id=".$nCatID;

			$result['category'] = DB::con()->runSQL("getSingleData", $sql);
			
			$sql = "SELECT 
				companies.id,
				companies.strName
			FROM 
				companies 
				LEFT JOIN companies_categories ON companies.id=companies_categories.nCompanyID 
				LEFT JOIN categories ON categories.id=companies_categories.nCategoryID
			WHERE
				companies_categories.nCategoryID='".$nCatID."' ORDER BY companies.strName";

			$result['companies'] = DB::con()->runSQL("getAllData", $sql);
			
			return (!empty($result['companies']))?$result:false;
		}
	}
	
?>