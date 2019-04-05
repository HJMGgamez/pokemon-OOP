<?php
//makes the move  for the pokemon
class Moves
{
	public $attack;
	public $damage;
	//get the values for the moves class 
	public function __construct($attack, $damage)
	{
		$this->attack = $attack;
		$this->damage = $damage;
	}
}