<?php

class Server {
    
    // Returns part of the url after '?' as a string
    function getCurrentUrl() {
        $url = $_SERVER["REQUEST_URI"];
        $queryString = parse_url($url, PHP_URL_QUERY);
        return $queryString;
    }


    
}



?>