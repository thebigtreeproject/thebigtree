<?php
function uploadFile($whichFile)
{
	$directoryToSaveFileInto = "../assets";
	$serverLocationAndName = $directoryToSaveFileInto."/".$_FILES[$whichFile]["name"];
	move_uploaded_file($_FILES[$whichFile]["tmp_name"], $serverLocationAndName);

	return $_FILES[$whichFile]["name"];
}

function dbConnect()
{
	$con = mysqli_connect("217.9.143.94","rheajuar_rheajuar","nLMPdrJb3519","rheajuar_royalgolfcourse");
	if ( mysqli_connect_errno())
	{
		echo "I am sorry this is not working. Try again later :)";
	}
	return $con;
}
function runSQL($sql)
{
	
	$con = dbConnect();
	
	mysqli_query($con, $sql);
	mysqli_close($con);

}
function runDeleteSQL($sql)
{ 
	$con = dbConnect();
	
	
	mysqli_query($con, $sql);
	mysqli_close($con);

}

function runInsertSQL($sql)
{
	
	$con = dbConnect();
	
	
	mysqli_query($con, $sql);
	$lastID = mysqli_insert_id($con);
	mysqli_close($con);

	return $lastID;
}

function getGlobalValue($record)
{
	$arrGlobalValue = runSelectSQL("SELECT * FROM siteglobals WHERE strName='".$record."'");
	return $arrGlobalValue[0]["strValue"];
}

function runSelectSQL($sql)
{
	
	$con = dbConnect();
	$queryResultArray = array();

	
	$result = mysqli_query($con, $sql);
	
	while ($arrResultRow=mysqli_fetch_assoc($result))
	{
		$queryResultArray[] = $arrResultRow;
	}

	mysqli_close($con);

	return $queryResultArray;
}

function showResultInTable($arrData)
{
	$html="";
	$headerRow="";

	$arrData = (isset($arrData))?$arrData:"";

	foreach($arrData as $arrRow)
	{
		$html .= "<div class='datarow'><div class='datacell'><a href='delete.php?id=".$arrRow["id"]."'>DELETE</a></div>";
		$headerRowCells = ""; 

			
			$arrRow = (isset($arrRow))?$arrRow:"";
			foreach($arrRow as $fieldName=>$arrValue)
			{
				$headerRowCells .= "<div class='headercell'>".$fieldName."</div>";
				$html .= "<div class='datacell'><a href='details.php?id=".$arrRow["id"]."'>".$arrValue."</a></div>\n";
			}
		
		$headerRow = "<div class='headerrow'><div class='headercell'>Delete</div>".$headerRowCells."</div>";
		
		$html .= "</div>";
	}

	echo $headerRow;
	echo $html;
}


?>