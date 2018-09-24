<?php

class Server {
    
    static $sessionNotes = [];
    static $sessionNotesKeys = [];
    
    
    static function parseQuery() {

        $queryString = $_SERVER["QUERY_STRING"];
        parse_str($queryString, $queryParams);

        self::$sessionNotes = $queryParams;
        self::$sessionNotesKeys = array_keys($queryParams);
    }

    static function setQueryParamsToSessionVariable() {

        if ($_SESSION["sessionNotes"] == "") {
            $_SESSION["sessionNotes"] = [];
        }

        if ($_SESSION["sessionNotesKeys"] == "") {
            $_SESSION["sessionNotesKeys"] = [];
        }

        if (!self::noteExists()) {
            array_push($_SESSION["sessionNotes"], self::$sessionNotes);
            array_push($_SESSION["sessionNotesKeys"], self::$sessionNotesKeys);
        }
    }

    static function noteExists() {

        foreach ($_SESSION["sessionNotes"] as $note) {
            if (!array_diff(self::$sessionNotes, $note)) {
                return true;
            }
        }
        return false;
    }
    
    public static function init() {

        self::parseQuery();
        self::setQueryParamsToSessionVariable();
    }
    


    
}



?>