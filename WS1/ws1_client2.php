<?php
 
require_once('lib/nusoap.php');
	$error  = '';
	$result = array();
	$result_complex = array();
	$guest= "hayet";
	$wsdl = "http://localhost/ToCode3-2/WS1/WS1.php?wsdl";
		if(!$error){
			
			$client = new nusoap_client($wsdl, true);
			$err = $client->getError();
			if ($err) {
				echo '<h2>Constructor error</h2>' . $err;
				
			    exit();
			}
			 try {
			
				$result = $client->call('hello', array('username'=>'soc11'));
				
				echo "<h2>Result<h2/>";
				print_r($result);
		
 			   $result_complex = $client->call('infoEtudiant', array('prenom'=>'dachraoui hayet'));
 			  
 			  echo "<h2>Result<h2/>";
 			  print_r($result_complex);

			  }
			  catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			 }
		}	

echo '<h2>Request</h2>';
echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2>';
echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';

echo '<h2>Debug</h2>';
echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>







