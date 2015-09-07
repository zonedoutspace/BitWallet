<?php
	include("login.php");
	if (isset($_SESSION['username'])){
		include("coinhandler.php");
		header("Location: deposit.php");
	}
	else
	{
		die("user not logged in");
	}
	  
?>
