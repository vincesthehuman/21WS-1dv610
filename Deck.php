<?php

class Deck {

  private $cardDeckArray = array();

  public function deckUnshuffled(){
    //array_push($cardDeckArray, minavärden)
    for($i = 1; $i != 14; $i++){
        $this->cardDeckArray[] = "hearts".$i;
        $this->cardDeckArray[] = "spades".$i;
        $this->cardDeckArray[] = "cloves".$i; 
        $this->cardDeckArray[] = "diamond".$i;
      }
      return $this->cardDeckArray;
  }

  public function shuffledDeck(){
    $shuffledDeck = $this->deckUnshuffled();
    if (shuffle($shuffledDeck)) { 
    return $shuffledDeck;
    } else { 
    return FALSE; 
    } 
  }

}