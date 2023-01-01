<?php
$url = $_GET["url"];

$path = parse_url($url, PHP_URL_PATH); //API URL of the original URL
$target_link = file_get_contents('https://api.rekonise.com/unlocks/' . $path . '/unlock'); //result of the API
//Removing unwanted symbols
$target_link = str_replace('"', '', $target_link);

header("location: $target_link"); //redirect user
?>
