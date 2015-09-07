<?php
	include("db.php");
	if (isset($_POST['newpassword']) && isset($_POST['confirmnewpassword']))
	{
	$newpass = sha1($_POST['newpassword']);
	$newpassconfirm = sha1($_POST['confirmnewpassword']);
	$username = $_SESSION['username'];
	//query
	$password= sha1($_POST['currentpass']);
	$sql = mysql_query("SELECT * FROM usersystem where username = '".$username."' AND password = '".$password."' LIMIT 1");
	
	$rows = mysql_num_rows($sql);
	
		if ($rows<=0)
			{
				die("Incorrect password");
			}
		if ($newpass != $newpassconfirm)
			{
				die ("new passwords do not match");
			}
 
			{
				mysql_query("update usersystem SET password='$newpass' where username='$username'") or die (mysql_error());
				header("Location: accountupdated.php");
							
			}
	}
?>