<?php 
class Charmeleon extends Pokemon
{
	public $species = 'charmeleon';
	public function __construct($name , $energyType , $hitpoints , $currentHealth , $moves , $weakness, $resistance)
	{
		parent::__construct($this->$species , $name , $energyType , $hitpoints , $currentHealth , $moves , $weakness, $resistance);
	}
}