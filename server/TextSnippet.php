<?php

class TextSnippet extends Snippet {

    public $text;

    function __construct($text) {
        $this->text = $text;
    }



    function generateHTML() {
        return "<p>". $this->text. "</p>";
    }

}

?>