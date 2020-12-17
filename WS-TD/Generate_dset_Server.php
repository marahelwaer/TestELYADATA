

<?php

require('Generate_dest.php');
$options = array("uri" => "http://localhost");

$server = new SoapServer(null, $options);

$server->setClass('Generate_dest'); 
 $server->handle();
 ?>