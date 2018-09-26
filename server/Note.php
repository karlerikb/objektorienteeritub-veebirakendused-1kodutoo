<?php

class Note {

    public static $instanceArray = [];


    // Methods for generating an instance array
    static function createNoteInstances() {

        foreach ($_SESSION["sessionNotes"] as $note) {

            $snippetInstancesArray = self::createSnippetInstances($note);

            if ($note["noteType"] === "standard") {
                array_push(self::$instanceArray, new StandardNote($note["noteTitle"], $snippetInstancesArray));
            }

            if ($note["noteType"] === "priority") {
                array_push(self::$instanceArray, new PriorityNote($note["noteTitle"], $snippetInstancesArray));
            }
        }
    }

    static function getSnippetsFromSessionVariable($noteParams) {

        $snippetArray = [];

        foreach ($noteParams as $key => $value) {
            if (substr($key, 0, 5) == "snip_") {
                array_push($snippetArray[$key] = $value);
            }
        }
        return $snippetArray;
    }

    static function createSnippetInstances($note) {

        $snippetArray = self::getSnippetsFromSessionVariable($note);
        $snippetInstancesArray = [];

        foreach ($snippetArray as $key => $value) {

            if (substr($key, 5, 4) === "text") {
                array_push($snippetInstancesArray, new TextSnippet($value));
            }
            
            if (substr($key, 5, 4) === "list") {
                array_push($snippetInstancesArray, new ListSnippet($value));
            }
        }
        return $snippetInstancesArray;
    }



    // Generating the notes HTML section
    static function generateNotes() {

        foreach (self::$instanceArray as $noteInstance) {
            $noteInstance->generateHTML();
        }
    }



    
    static function printInstances() {

        foreach (self::$instanceArray as $instance) {
            print_r($instance);
            echo "<br>";
        }
    }


    public static function init() {

        self::createNoteInstances();
        //self::printInstances();
        self::generateNotes();
    }




}

?>