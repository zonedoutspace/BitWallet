<?php
	include("db.php");
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeatpassword']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = sha1($_POST['password']);
		$repeatpassword = sha1($_POST['repeatpassword']);
		$sql= mysql_query("SELECT username FROM usersystem WHERE username = '".$username."'");
		if (mysql_num_rows($sql)>0)
			{
				die("Username taken.");
			}
		if ($password != $repeatpassword)
			{
				die("Passwords do not match.");
			}
			{
				mysql_query("INSERT INTO usersystem (username, password) VALUES	('$username','$password')") or die (mysql_error());
				header("Location: registrationsuccess.php");
			}
	}
?>