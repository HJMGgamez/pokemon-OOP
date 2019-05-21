<?php
//makes the weakness for the pokemon
Class Weakness 
{
	public $type;
	public $multiplier;
	//get the values for the wekness class 
	public function __construct($type, $multiplier)
	{
		$this->type = $type;
		$this->multiplier = $multiplier; 
	}
}