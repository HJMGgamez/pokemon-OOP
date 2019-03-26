<?php

Class Weakness 
{
	public $Weakness;
	public $Multiplier;
	public function __construct($Weakness, $Multiplier)
	{
		$this->Weakness = $Weakness;
		$this->Multiplier = $Multiplier; 
	}
}