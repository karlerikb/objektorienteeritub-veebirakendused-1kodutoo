<?php
session_start();

spl_autoload_register(function ($class) {
    require_once($class.".php");
});

Server::init();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css' integrity='sha256-ncjDAd2/rm/vaNTqp7Kk96MfSeHACtbiDU9NWKqNuCI=' crossorigin='anonymous'>
    <link rel='stylesheet' href='../src/style.css'>
    <title>Märkmed</title>
</head>

<body>
    
    <div class="ui container">

        <nav class="navigation">
            <a class="ui labeled icon button" href="../index.php">
                <i class="left arrow icon"></i>
                Tagasi
            </a>
        </nav>

        <h1 class="ui header main-header">Märkmed</h1>
        
        <div class="notebook">

            <!-- Note -->
            <div class="ui raised segments note">
                <!-- Note title -->
                <div class="ui clearing segment orange">
                    <h2 class="ui left floated header main-header">Pealkiri</h2>
                    <div class="ui right floated label orange">
                        <i class="exclamation icon"></i>
                        Tähtis
                    </div>
                </div>

                <!-- Note body -->
                <div class="ui segment">
                    <p class="test">Secondary Content</p>
                    <p>Secondary Content</p>
                    <p>Secondary Content</p>
                </div>
            </div>


            <!-- Note -->
            <div class="ui raised segments note">

                <!-- Note title -->
                <div class="ui segment">
                    <h2 class="ui header main-header">Pealkiri</h2>
                </div>

                <!-- Note body -->
                <div class="ui segment">
                    <p>Secondary Content</p>
                    <ul class="ui list">
                        <li>Gaining Access</li>
                        <li>Inviting Friends</li>
                        <li>Benefits
                            <ul>
                                <li>Use Anywhere</li>
                                <li>Rebates</li>
                                <li>Discounts</li>
                            </ul>
                        </li>
                        <li>Warranty</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>

<?php




echo "<br><br><br>";
print_r($_SESSION["sessionNotes"]);
echo "<br><br><br>";
print_r($_SESSION["sessionNotesKeys"]);











for($i=0; $i < count($keys); ++$i) {
    //echo $keys[$i] . ' ' . $query_params[$keys[$i]] . "\n";
}

$textarea = $_GET["snip_text_1"];
$linebreaks = ["\r\n", "\r", "\n"];

$string = str_replace($linebreaks, "§", $textarea);

$stringArray = explode("§", $string);

//var_dump($stringArray);

?>