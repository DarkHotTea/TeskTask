<?php
namespace App\Core;

class Model
{
    protected static $link;

	public function __construct()
	{
		if (!self::$link) {
			self::$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			mysqli_query(self::$link, "SET NAMES 'utf8'");
		}		
	}	
}