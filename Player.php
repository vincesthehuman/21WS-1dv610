<?php

class Player{
    private $card;
    private $playerHand = array();

    public function constructor($card){
        $this->card;
    }

    public function addToHand(){
        array_push($this->playerHand, $this->card);
    }    
}