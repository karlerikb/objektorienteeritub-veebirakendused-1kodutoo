<?php

class Snippet {

    public static $instanceArray = [];

    function __construct($instanceArray) {
        $this->instanceArray = $instanceArray;
    }



    static function generateSnippetSectionHTML($instanceArray) {

        $snippetsHTML = "";

        foreach ($instanceArray as $snippetInstance) {
            $snippetsHTML .= $snippetInstance->generateHTML();
        }
        return "<div class='ui segment'>". $snippetsHTML ."</div>";
    }




}

?>