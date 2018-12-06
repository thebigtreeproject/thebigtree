<?php

Class DB{
	static function con()
	{
		$oConnection = new Connection();
		return $oConnection;
	}	
}

?>