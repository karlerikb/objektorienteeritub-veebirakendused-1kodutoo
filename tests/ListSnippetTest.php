<?php

require("../server/Snippet.php");
require("../server/ListSnippet.php");

use PHPUnit\Framework\TestCase;

class ListSnippetTest extends TestCase {

    public function testListRowsForLinebreak_r() {

        $testSnippet = new ListSnippet("Siin on\rlinebreak");

        $resultArray = $testSnippet->getListRows();
        $testArray = ["Siin on", "linebreak"];

        $this->assertEquals($resultArray, $testArray);
    }

    
    public function testListRowsForLinebreak_n() {

        $testSnippet = new ListSnippet("Siin on\nuus\nlinebreak");

        $resultArray = $testSnippet->getListRows();
        $testArray = ["Siin on", "uus", "linebreak"];

        $this->assertEquals($resultArray, $testArray);
    }


    public function testListRowsForLinebreak_rn() {

        $testSnippet = new ListSnippet("Siin on\r\nka yks linebreak");

        $resultArray = $testSnippet->getListRows();
        $testArray = ["Siin on", "ka yks linebreak"];

        $this->assertEquals($resultArray, $testArray);
    }


    public function testListRowsForLinebreak_rn_2() {

        $testSnippet = new ListSnippet("Siin on\r\n\r\n\r\npalju linebreake");

        $resultArray = $testSnippet->getListRows();
        $testArray = ["Siin on", "", "", "palju linebreake"];

        $this->assertEquals($resultArray, $testArray);
    }




}

/*

./../../phpunit ListSnippetTest.php 

*/
?>

