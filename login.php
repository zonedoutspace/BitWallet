<?php
	include("db.php");
	
	if (isset($_POST['username']) && isset($_POST['password']))
		{
			user_login($_POST['username'],sha1($_POST['password']));
		}
		
?>