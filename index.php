<?php 
require_once('link.php');

$player = new Player;
$game = new Game;
$gameOver = false;

$game->init();
$game->launch();

while($gameOver === false){
    $game->showMap();
    $move = $game->playerChoice();

}

