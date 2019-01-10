<?php
class Connection{
    public function runSQL($runType, $sql)
    {
        $con = mysqli_connect("192.185.103.161","italocar_bigtree","123456","italocar_bigtree");
        $result = mysqli_query($con, $sql);

        if (mysqli_connect_errno())
        {
            echo "Oh no, something gone wrong with your connection!";
        } 

        switch($runType){
            case 'insertNew': //After insert record in my database I want to have know the ID of this last record then I can call this last record from database, after to run this function.
                $lastID = mysqli_insert_id($con);
                return $lastID;
                break;

            case 'getAllData': //To get records I want an array of results as main result
                while($row = mysqli_fetch_assoc($result))
                {
                    $arrAllResults[] = $row;
                }
                return $arrAllResults;
                break;

            case 'getSingleData': //To get record and make a single array with it fields (get a row from the table)
                $record = mysqli_fetch_assoc($result);
                return $record;

            default://To execute other functions that don`t need a result outputed

        }
        mysqli_close($con);
    }
    public function saveImgOnServer($n,$tmp){
        $targetDirectory = "assets";
        $serverLocationAndName = "../".$targetDirectory."/".$n;
        move_uploaded_file($tmp, $serverLocationAndName);
    }
}
?>