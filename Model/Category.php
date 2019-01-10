<?php 
	class Category {
		static function getAllCategories(){
			$sql = "SELECT * FROM categories";
			return DB::con()->runSQL("getAllData", $sql);
		}
	}
?>