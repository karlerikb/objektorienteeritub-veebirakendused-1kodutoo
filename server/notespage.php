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

<?php
Note::init();
?>

        </div>
    </div>
</body>