<?php
	include("login.php");
	session_unset();
	header("Location: home.php");
?>