<?php

spl_autoload_register(function ($class) {
    require_once($class.".php");
});

//echo "test";

var_dump($_SERVER["QUERY_STRING"]." test");
//var_dump($_SERVER["REQUEST_URI"]);


/* $url = $_SERVER["REQUEST_URI"];
$query_str = parse_url($url, PHP_URL_QUERY); */

$server = new Server();

//var_dump($server->getCurrentUrl());


//echo "<br><br><br>";
//print_r($query_str);
//echo "<br><br><br>";
parse_str($query_str, $query_params);
//print_r($query_params);

//echo "<br><br><br>";

//$array = array('key1' => 'value1', 'key2' => 'value2'); 

$keys = array_keys($query_params);
//print_r($keys);

echo "<br><br><br>";

for($i=0; $i < count($keys); ++$i) {
    //echo $keys[$i] . ' ' . $query_params[$keys[$i]] . "\n";
}

$textarea = $_GET["snip_text_1"];
$linebreaks = ["\r\n", "\r", "\n"];

$string = str_replace($linebreaks, "§", $textarea);

$stringArray = explode("§", $string);

//var_dump($stringArray);

?>