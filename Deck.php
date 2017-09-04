<?php

class Deck {

	public $cardDeckArray = array();

    public function deckUnshuffled(){
      //array_push($cardDeckArray, minavärden)
      for($i = 0; $i <= 13; $i++){
          array_push($this->cardDeckArray, "hearts".[$i], "spades".[$i], "cloves".[$i], "diamond".[$i]);
        }
        var_dump($this->cardDeckArray);
      }

  }