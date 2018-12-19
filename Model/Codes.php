<?php 
	class Code {
		static function generateCode($length = 8){
			$alpha = 'abcdefghijklmnopqrstuvwxyz';
			$numeric = '0123456789';
			$alphaLength = strlen($alpha);
			$numLength = strlen($numeric);

			$randomString = '';
			for ($i = 0; $i < floor($length/2) ; $i++) {
				$randomString .= $alpha[rand(0, $alphaLength - 1)];
				$randomString .= $numeric[rand(0, $numLength - 1)];
			}
			$randomString = substr_replace($randomString, "-", floor($length/2), 0);

			return $randomString;
		}

		static function checkCode($code){
			$sql = "SELECT * FROM codes WHERE codes.strCode='".$code."'";
			$exists = DB::con()->runSQL("getSingleData", $sql);
			
			if($exists){
				return $exists;
			}
		}

		static function saveCode(){
			$newCode = self::generateCode();
			$exists = self::checkCode($newCode);

			if($exists){
				saveCode();
			}
			else if(!$exists && isset($_SESSION['userInfo']['id'])){
				$sql = "INSERT INTO codes(strCode, nUserID) VALUES ('".$newCode."', '".$_SESSION['userInfo']['id']."')";
				$nCodeID = DB::con()->runSQL("insertNew", $sql);
				
				return $newCode;
			}
		}

		static function deleteCode($ncodeID){
			$sql = "DELETE FROM codes WHERE codes.id=".$ncodeID;
			DB::con()->runSQL("deleteData", $sql);
		}
	}
?>