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
        $sql = "SELECT codes.bInUse FROM codes WHERE codes.strCode=".$code;
        $inUse = DB::con()->runSQL("getSigleData", $sql);

        return $inUse;
    }
    
    static function saveCode(){
        $newCode = self::generateCode();
        $codeInUse = self::checkCode($newCode);

        if($codeInUse){
            saveCode();
        }
        else if(!$codeInUse && isset($_SESSION['nCondoID'])){
            $sql = "INSERT INTO codes(strCode, nCondoID, bInUse) VALUES ('".$newCode."', '".$_SESSION['nCondoID']."', 0)";
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