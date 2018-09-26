<?php

class StandardNote extends Note {

    public $title;
    public $snippets = [];

    function __construct($title, $snippetsArray) {
        $this->title = $title;
        $this->snippets = $snippetsArray;
    }


    function generateHTML() {

        echo
        "<div class='ui raised segments note'>".
            "<div class='ui segment'>".
                "<h2 class='ui header main-header'>".$this->title."</h2>".
            "</div>".
            Snippet::generateSnippetSectionHTML($this->snippets).
        "</div>";
    }



}

?>