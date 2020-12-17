<?php

require "php2wsdl/src/PHPClass2WSDL.php";
require "vendor/autoload.php"; 
$class="Generate_dest";
$serviceURI="http://localhost/ToCode3-2/WS-TD/Genrate_dest_server.php";
$expectedFile="Generate_dest.wsdl";
require "Generate_dest.php";
$gen = new \PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
$gen->generateWSDL();
file_put_contents($expectedFile, $gen->dump());
echo "Generated WSDL:";
echo "<a href='http://localhost/ToCode3-2/WS-TD/$expectedFile'>$expectedFile</a><br/>";
?>