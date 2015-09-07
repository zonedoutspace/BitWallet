<?php
	include("login.php");
	require_once '/API/jsonRPCClient.php';
	error_reporting(E_WARNING | E_PARSE);
 	$bitcoin = new jsonRPCClient('http://username:password@127.0.0.1:8332/') or die ("An error has occurred. Please try again.");
	
	
		
	$amount=floatval(mysql_real_escape_string($_POST['amount']));
	$receiver=mysql_real_escape_string($_POST['address']);
	$accountbalance=$bitcoin->getbalance($_SESSION['username'],4);
	$isvalid= $bitcoin->validateaddress($receiver);
	
				
	// checking account balance and valid address
	if ($isvalid['isvalid']==0)
	{
		die("Sending address is invalid.");
	}
	else if($accountbalance<$amount) // check if sufficient balance in user account
	{
		die("Insufficient funds in account.");
	}
	else if ($accountbalance>=$amount && $isvalid['isvalid']==1){
		$bitcoin->sendfrom($_SESSION['username'],$receiver,$amount,3);
		header("Location: sent.php");
	}
	else
	{
		die("An error has occurred.");	
	}
?>
