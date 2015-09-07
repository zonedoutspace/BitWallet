<?php
	include("login.php");
	if (isset($_SESSION['username'])){include("coinhandler.php");}
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

	<div id="userInfo">
    
    <?php
	if (isset($_SESSION['username'])){
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
                <input type="submit" value="Go" /></form>
				</p><a href="registrationform.php">Register</a></p>');
		}
		?>
    	</div>

		<div id="main">
             <?php
			if (isset($_SESSION['username']))
			{
				echo('<h3>Deposit Bitcoin</h3>
				<p>To deposit Bitcoin into your account, use the following address:</p>
				<h4>'.$address.'</h4> 
				<p><b><a href="newaddress.php">Get new address</a></b></p>
				<br>
				<p>A new address will appear every time you refresh or visit this page. You may use any of the addresses previously associated with your account. However, it is recommended to use a different address for each deposit you make.</p>
				<p>Warning: it may take up to 1-2 hours for the block chain to confirm your deposit.</p>');
			}
			else
			{
				echo('<h3>Deposit Bitcoin</h3><p><b>Error:</b> User not logged in.</p>');
			}
			?>
		</div>
</div>
<div id="footer"><p>BitWallet 2015</p></div>


</body>
</html>
