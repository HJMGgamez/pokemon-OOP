<?php
//makes the resistance  for the pokemon
class Resistance 
{
	public $resistance;
	public $reduce;
	//get the values for the resistance class 
	public function __construct($resistance, $reduce)
	{
		$this->resistance = $resistance;
		$this->reduce = $reduce; 
	}
}