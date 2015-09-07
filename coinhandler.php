
<?php
 require_once '/API/jsonRPCClient.php';
 error_reporting(E_WARNING | E_PARSE);
 $bitcoin = new jsonRPCClient('http://username:password@127.0.0.1:8332/');
  	$balance=$bitcoin->getbalance($_SESSION['username'],4);
	
	if (isset($address)){
		$address=$bitcoin->getaccountaddress($_SESSION['username']);
	}
	else
	{
		
		$address=$bitcoin->getnewaddress($_SESSION['username']);
	}
?>