<?php
	include("login.php");
	if (isset($_SESSION['username'])){include("coinhandler.php");}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet2.css">
<meta charset="utf-8">
<title>BitWallet - the Online Bitcoin Wallet</title>
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
                <input type="submit" value="Go" /></form>');
		}
			?>
			
    	</div>
    
		<div id="main"><?php 

			if (!isset($_SESSION['username']))
			{
				echo('<h3>Register a new account</h3>
            			<form action="register.php" method="post">
            	<p>Username:</p> <input name="username" type="text" />
                <p>Password:</p> <input name="password" type="password" />
                <p>Repeat password:</p> <input name="repeatpassword" type="password" />
                <br>
                <input type="submit" value="Go" />
				<br>
				<p><b>Warning:</b> Because BitWallet does not ask for your email address, your account <b>cannot</b> be recovered if you lose or forget your password!
            
            </form>');
			}
			else
			{
				echo('<p><b>Error:</b> User already logged in!');
			}
			?>

		</div>
        
</div>
<div id="footer"><p>BitWallet 2015</p></div>


</body>
</html>