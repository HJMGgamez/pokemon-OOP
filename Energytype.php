<?php
//makes the energytype for the pokemon
class Energytype 
{
	public $Type;
	public const FIRE = 'fire'; 
	//get the values for the energytype  class 
	public function __construct($Type)
	{
		$this->Type = $Type;
	}
}