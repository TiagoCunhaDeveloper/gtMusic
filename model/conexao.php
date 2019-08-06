<?php

class dataBaseCore{

	public static $_instance;
	
	public static function getHandler(){

		$host = "127.0.0.1";
		$dbname = "bd_gtmusic";
		$charset = "utf8";
		$user = 'root';
		$password = '';

		if ( !isset( self::$_instance ) ) {   
            self::$_instance = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",$user, $password);        
        }       
        return self::$_instance;
	}
}
?>