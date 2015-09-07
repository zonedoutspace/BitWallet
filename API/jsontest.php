<html>
<?php 
 require_once 'jsonRPCClient.php';
 error_reporting(E_WARNING | E_PARSE);
  $bitcoin = new jsonRPCClient('http://username:password@127.0.0.1:8332/'); 
 
  echo "<pre>\n";
  print_r($bitcoin->getinfo());
  print_r($bitcoin->listaccounts());
  echo "</pre>";
  print_r($bitcoin->validateaddress('g'));

?>
</html>