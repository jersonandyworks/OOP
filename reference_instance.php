<?php

/**
 * 
 */
class Player {
	// these are properties
	var $agility;
	var $strength;
	var $intellegence;
	var $dextirity;
	var $character_name;
	var $skin_color;
	var $eye_color;
	
    
	function character_name(){
		echo $this->character_name;
	}
}

$player1 = new Player();

$player1->agility = 15;
$player1->strength = 15;
$player1->intellegence = 15;
$player1->dextirity = 15;
$player1->character_name = "EULA";
$player1->eye_color = "BLUE";
$player1->skin_color ="Brown";

echo "<h3>Player 1</h3>";
echo "Agi: ".$player1->agility."<br>";
echo "Strength: ".$player1->strength."<br>";
echo "Int: ".$player1->intellegence."<br>";
echo "Dex: ".$player1->dextirity."<br>";
echo "Character Name: ".$player1->character_name."<br>";

echo "<hr>";

$player2 = new Player();

$player2->agility = 11;
$player2->strength = 20;
$player2->intellegence = 30;
$player2->dextirity = 25;
$player2->character_name = "Black Beard";
$player2->eye_color = "BLACK";
$player2->skin_color ="Flesh";

echo "<h3>Player 2</h3>";
echo "Agi: ".$player2->agility."<br>";
echo "Strength: ".$player2->strength."<br>";
echo "Int: ".$player2->intellegence."<br>";
echo "Dex: ".$player2->dextirity."<br>";
echo "Character Name: ".$player2->character_name."<br>";
