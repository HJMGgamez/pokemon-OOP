<?php
//makes the move  for the pokemon
class Moves
{
	public $attack;
	//get the values for the moves class 
	public function __construct($attack)
	{
		$this->attack = $attack;
	}
}