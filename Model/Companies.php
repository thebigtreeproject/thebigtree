<?php 
	class Companies {
		static function getAll(){
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
				LEFT JOIN categories ON categories.id=companies_categories.nCategoryID";
			return DB::con()->runSQL("getAllData", $sql);
		}
	}
?>