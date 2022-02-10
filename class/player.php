<?php

class Player{
    protected $items;
    protected $playerChoice;

    function __construct(){
        $this->items = [];
    }

    public function getItems(){
        return $this->items;
    }

    public function setItems($items){
        $this->playerPos = $items;
    }
}
