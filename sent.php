<?php
	include("login.php");
	include("coinhandler.php");
	if (!isset($_SESSION['username'])){header("Location: home.php");}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet2.css">
<meta charset="utf-8">
<title>BitWallet -The Online Bitcoin Wallet</title>
</head>

<body>


<div id="headBar"><p class="logoFont">BitWallet</p></div>

	<div id="userInfo">
    
    <?php
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
			echo('- <a href="deposit.php">Deposit</a><br>
				- <a href="withdraw.php">Withdraw</a><br>
				- <a href="accountsettings.php">Account Settings</a><br>
				- <a href="logout.php">Log out</a>');
		}
		else
		{
			echo('<p>Log in:</p><form action="login.php" method="post">
            	<p>Username:</p> <input name="username" type="text" />
                <p>Password:</p> <input name="password" type="password" />
                <input type="submit" value="Go" /></form>');
		}
		?>
    	</div>

		<div id="main">
			<h3>Withdrawal success</h3>
			<p>The coins have successfully been withdrawn from your account. Note: it may take up to several hours for the transaction to appear in the blockchain.</p>
		</div>
</div>
<div id="footer"><p>BitWallet 2015</p></div>

</body>
</html>
