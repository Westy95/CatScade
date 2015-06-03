<?php
header('Content-type: application/json');
$jsonItem = file_get_contents('http://catfacts-api.appspot.com/api/facts');   
echo $jsonItem; 
?>