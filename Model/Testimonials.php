<?php
	class Testimonials
	{
		static function submit(){
			$sql = "INSERT INTO testimonials(strTestimonial, nUserID, nDateUTC) VALUES ('".addslashes($_POST['strTestimonial'])."','".$_POST['nUserID']."','".$_POST['nDate']."')";
			return DB::con()->runSQL("insertNew", $sql);
		}
		static function getTestimonials($limit = ''){
			$sql = "SELECT
						testimonials.strTestimonial,
						users.strFirstName,
						users.strLastName,
						testimonials.nDateUTC
					FROM
						testimonials
					LEFT JOIN users ON users.id = testimonials.nUserID
					ORDER BY
						nDateUTC
					DESC
					LIMIT ".$limit;
			return DB::con()->runSQL("getAllData", $sql);
		}		
	}
?>