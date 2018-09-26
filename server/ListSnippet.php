<?php

class ListSnippet extends Snippet {

    public $text;

    function __construct($text) {
        $this->text = $text;
    }



    function generateHTML() {
        //$this->generateListHTML();

        return "<p>". $this->generateListHTML() ."</p>";
    }


    function getListRows() {

        $linebreaks = ["\r\n", "\r", "\n"];
        $string = str_replace($linebreaks, "±§", $this->text);
        $stringArray = explode("±§", $string);

        //print_r($stringArray);

        return $stringArray;
    }

    function generateListHTML() {

        $stringArray = $this->getListRows();
        $listHTML = "";

        $rowsArray = [];
        $counter = 0;

        foreach ($stringArray as $row) {
            $trimmedRow = trim($row);

            if (substr($trimmedRow, 0, 1) === "*") {
                $listHTML .= "<li>".explode("*", $trimmedRow)[1]."</li>";

                array_push($rowsArray["list_".++$counter] = $trimmedRow);

            } else {
                $listHTML .= "<li>". $trimmedRow ."</li>";

                array_push($rowsArray["text_".++$counter] = $trimmedRow);
            }
        }
        //print_r($rowsArray);
        return $listHTML;
    }
}

?>