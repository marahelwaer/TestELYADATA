<?php

$options = array(
	"location" => "http://localhost/ToCode3-2/WS-TD/Generate_dest_server.php",
	"uri" => "http://localhost",
	'trace' => 1);
try {
$client = new SoapClient(null, $options); 
$result = $client->getGenerate_dest('1111111'); 
echo '<br/><h1>Service response</h1>';
print_r($result);
} 
catch (SoapFault $e) {
    echo '<br/><h1>Error: </h1>';
var_dump($e); 
}
// print soap request and response (debug)
	echo '<br/><h1>SOAP Request</h1>'.htmlspecialchars($client->__getLastRequest()).'<br/>';
	echo '<br/><h1>SOAP Response </h1>'.htmlspecialchars($client->__getLastResponse()).'<br/>';
 
?>