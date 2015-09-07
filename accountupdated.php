
<?php
	include("login.php");
	if (isset($_SESSION['username'])){include("coinhandler.php");}
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet2.css">
<meta charset="utf-8">
<title>BitWallet - The Online Bitcoin Wallet</title>
</head>

<body>


<div id="headBar"><p class="logoFont">BitWallet</p></div>

	<div id="userInfo"><?php 

			if (isset($_SESSION['username']))
			{
				echo('<p>Welcome, <b>'.$_SESSION['username'].'</b>! Your current balance is: '.$balance.' BTC</p>');
			}
			else
            {
				echo('<p>User not logged in.</p>');
			}
?>
	</div>
	<div id="container">
		<div id="nav">
        <?php 

			if (isset($_SESSION['username']))
			{
				echo('
			- <a href="deposit.php">Deposit</a><br>
            - <a href="withdraw.php">Withdraw</a><br>
            - <a href="accountsettings.php">Account Settings</a><br>
            - <a href="logout.php">Log out</a>');
		}
		else
		//display login form
		{
			echo('<p>Log in:</p><form action="login.php" method="post">
            	<p>Username:</p> <input name="username" type="text" />
                <p>Password:</p> <input name="password" type="password" />
                <input type="submit" value="Go" /></form>
				</p><a href="registrationform.php">Register</a></p>');
		}
			?>
        </div>
        <div id="main">
        <?php
			if (isset($_SESSION['username']))
			{
			echo('<h3>Account updated</h3>
           <p>Your account information has been successfully updated.</p>');
			}
			else
			{
			echo('<p><b>Error:</b> User not logged in.</p>');
			}
			?>

		</div>
        
</div>
<div id="footer"><p>BitWallet 2015</p></div>


</body>
</html>
