<?php
session_start();
?>

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

         <nav class="navigation">
            <a class="ui right labeled icon button" href="server/notespage.php">
                <i class="right arrow icon"></i>
                Märkmed
            </a>
        </nav>

        <h1 class="ui header main-header">Märkme loomine</h1>

        <!-- Note form -->
        <div class="ui raised segment newNote">
            <form class="ui form" method="GET" action="server/notespage.php">

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
                    <div>
                        <input type="hidden" id="noteId">
                    </div>
                </div>
                
                <!-- Snippet Fields -->
                <h3 class="ui dividing header small">Alammärkmed</h3>
                <div class="fields">
                    <div class="four wide field">
                        <label>Tüüp</label>
                        <select name="snippetType" class="ui dropdown snippetType">
                            <option value="text">Tekst</option>
                            <option value="list">Nimekiri</option>
                        </select>
                    </div>
                    <div class="two wide field">
                        <label>&nbsp;</label>
                        <div class="ui button newSnippetBtn">Uus</div>
                    </div>
                </div>

                <!-- Snippets will go into this element -->
                <div class="snippetsContainer"></div>

                <!-- Submit form button -->
                <button class="ui button green" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="src/main.js"></script>
</body>
</html>