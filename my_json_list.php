<?php
	header("Content-Type: application/json");//lets browser know this has official json data in it
	$var1 = $_POST["var1"];
	$var2 = $_POST["var2"];
	$jsonData = '{"obj1":{ "propertyA": "'.$var1.'", "propertyB": "'.$var2.'"} }';
	echo $jsonData;
;?>