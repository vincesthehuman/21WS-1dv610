<?php

require_once("Deck.php");

$regularDeck = new Deck();

$world = "World!";

echo "<h2>Hello, " . $world . "</h2>" . $regularDeck->deckUnshuffled();

