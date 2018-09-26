<?php

class PriorityNote extends Note {

    public $title;
    public $snippets = [];

    function __construct($title, $snippetsArray) {
        $this->title = $title;
        $this->snippets = $snippetsArray;
    }


    function generateHTML() {
        
        echo 
        "<div class='ui raised segments note'>".
            "<div class='ui clearing segment orange'>".
                "<h2 class='ui left floated header main-header'>".$this->title."</h2>".
                "<div class='ui right floated label orange'>".
                    "<i class='exclamation icon'></i>".
                    "Tähtis".
                "</div>".
            "</div>".
            Snippet::generateSnippetSectionHTML($this->snippets).
        "</div>";
    }
}

?>