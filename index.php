<?php
require_once("Deck.php");
$deck = new Deck();
$world = "World!";
echo "<h2>Hello, " . $world . "</h2>" . var_dump($deck->shuffledDeck());