<?php

require_once("Deck.php");

$regularDeck = new Deck();

$world = "World!";

echo "<h2>Hello, " . $world . "</h2>" . $regularDeck->deckUnshuffled();

echo "<!DOCTYPE html>
<html>

<head>
    <title>21</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='stylesheet/style.css' rel='stylesheet'>
    <meta charset='UTF-8'>
</head>

<body>
    <main>
        <div id='gameBoard'>
            <h1>Game 21</h1>

            <div class='cards'></div>
            <div class='scores'></div>
            <button>Hit</button>
            <button>Stand</button>
            <div class='resultText'>
                <p>Result: </p>
            </div>            
        </div>
    </main>
</body>

</html>";

