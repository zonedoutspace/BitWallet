<?php
	session_start();
	//replace with db info
	mysql_connect("localhost", "root", "");
	mysql_select_db("bcwallet");
	//login function
function user_login($username, $password)
{
	//prevent mysql injection
	$username = mysql_real_escape_string($username);
	//query
	$sql = mysql_query("SELECT * FROM usersystem where username = '".$username."' AND password = '".$password."' LIMIT 1");
	$rows = mysql_num_rows($sql);
		if ($rows<=0)
			{
				echo "incorrect username/password";
			}
			else
			{
				$_SESSION['username']=$username;
				header("Location: home.php");
			}
}
?>
