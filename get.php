<?php
// codesnipet 
// read file from url/api with json format
$json = file_get_contents('http://ip-api.com/json'); 
$location_json = json_decode($json);
//var_dump($location_json);
echo "<pre>";
print_r($location_json);
echo "</pre>";

?>