<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css' integrity='sha256-ncjDAd2/rm/vaNTqp7Kk96MfSeHACtbiDU9NWKqNuCI=' crossorigin='anonymous'>
    <link rel='stylesheet' href='src/style.css'>
    <title>Märkmed</title>
</head>

<body>
    <div class="ui container">
        <h1 class="ui header main-header">Märkmed</h1>

         <!-- <div class="newNote"> -->

            <div class="ui raised segment newNote">
                <form class="ui form">

                    <!-- Note Fields -->                
                    <div class="fields">
                        <div class="twelve wide field">
                            <label>Pealkiri</label>
                            <input type="text" name="noteTitle" placeholder="Pealkiri">
                        </div>
                        <div class="four wide field">
                            <label>Tüüp</label>
                            <select name="noteType" class="ui dropdown">
                                <option value="standard">Tavaline</option>
                                <option value="priority">Tähtis</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Snippet Fields -->
                    <h3 class="ui dividing header small">Alammärkmed</h3>
                    <div class="fields">
                        <div class="four wide field">
                            <label>Tüüp</label>
                            <select name="snippetType" class="ui dropdown">
                                <option value="text">Tekst</option>
                                <option value="list">Nimekiri</option>
                            </select>
                        </div>
                        <div class="two wide field">
                            <label>&nbsp;</label>
                            <div class="ui button newSnippetBtn">Uus</div>
                        </div>
                    </div>

                    <div class="snippetsContainer">
                    
                        <!-- <div class="ui segment snippet secondary">
                            <div class="fields">
                                <div class="twelve wide field">
                                    <label>Tekst</label>
                                    <textarea name="snippetText1" placeholder="Tekst" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="ui segment snippet secondary">
                            <div class="fields">
                                <div class="twelve wide field">
                                    <label>Tekst</label>
                                    <textarea name="snippetText2" placeholder="Tekst" rows="3"></textarea>
                                </div>
                            </div>
                        </div> -->

                    </div>

                    
                    
                    <button class="ui button green" type="submit">Submit</button>
                </form>
            </div>
        <!-- </div> -->
    </div>


    <script>
        /* const newFieldBtn = document.querySelector(".newFieldBtn");
        const fieldContainer = document.querySelector(".fieldContainer");

        newFieldBtn.addEventListener("click", function() {

            //const fieldsCollection = document.querySelector(".fieldContainer");
            let codeNumber = fieldContainer.children.length + 1;
            console.log(codeNumber);

            const field = document.createElement("div");
            fieldContainer.appendChild(field);
            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", `field${codeNumber}`);
            field.appendChild(input);
        }); */


    </script>
    <script src="src/main.js"></script>
</body>
</html>


<?php

/* echo "test";

//var_dump($_SERVER["QUERY_STRING"]);
//var_dump($_SERVER["REQUEST_URI"]);
$url = $_SERVER["REQUEST_URI"];
$query_str = parse_url($url, PHP_URL_QUERY);
echo "<br><br><br>";
print_r($query_str);
echo "<br><br><br>";
parse_str($query_str, $query_params);
print_r($query_params);

echo "<br><br><br>";

//$array = array('key1' => 'value1', 'key2' => 'value2'); 

$keys = array_keys($query_params);
print_r($keys);

echo "<br><br><br>";

for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' ' . $query_params[$keys[$i]] . "\n";
}


echo "<br><br><br>";
echo "<br><br><br>";

var_dump(parse_url($url));
echo "<br>";
var_dump(parse_url($url, PHP_URL_SCHEME));
echo "<br>";
var_dump(parse_url($url, PHP_URL_USER));
echo "<br>";
var_dump(parse_url($url, PHP_URL_PASS));
echo "<br>";
var_dump(parse_url($url, PHP_URL_HOST));
echo "<br>";
var_dump(parse_url($url, PHP_URL_PORT));
echo "<br>";
var_dump(parse_url($url, PHP_URL_PATH));
echo "<br>";
var_dump(parse_url($url, PHP_URL_QUERY));
echo "<br>";
var_dump(parse_url($url, PHP_URL_FRAGMENT));
echo "<br>";

//print_r($query_str);
//var_dump($_POST["url"]);
 */

?>