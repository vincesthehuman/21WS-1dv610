<?php

require_once("Deck.php");
require_once("gameBoard.php");

$regularDeck = new Deck();

$world = "World!";

echo "<h2>Hello, " . $world . "</h2>" . $regularDeck->deckUnshuffled();

