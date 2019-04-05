<?php
//makes the weakness for the pokemon
Class Weakness 
{
	public $weakness;
	public $multiplier;
	//get the values for the wekness class 
	public function __construct($weakness, $multiplier)
	{
		$this->weakness = $weakness;
		$this->multiplier = $multiplier; 
	}
}