<?php
session_start(); 
if ( isset( $_SESSION["sessiontime"] ) ) { 
	if ($_SESSION["sessiontime"] < time() ) { 
		session_unset();
	} else {
		$_SESSION["sessiontime"] = time() + 3600;
	}
} else { 
	session_unset();
}
?>