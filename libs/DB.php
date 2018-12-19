<?php

class DB{
	static function con()
	{
		$oConnection = new Connection();
		return $oConnection;
	}	
}

?>