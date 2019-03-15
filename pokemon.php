<?php 
class Pokemon {
	public $species;
	public $name;
	public $energyType;
	public $hitpoints;
	public $currentHealth;
	public $moves = array();
	public $weakness = array();
	public $resistance = array();

	public function __construct($species, $name , $energyType , $hitpoints , $currentHealth , $moves , $weakness, $resistance)
	{
		$this->$species = $species;
		$this->$name = $name;
		$this->$energyType = $energyType;
		$this->$hitpoints = $hitpoints;
		$this->$currentHealth = $currentHealth;
		$this->$moves = $moves;
		$this->$weakness = $weakness;
		$this->$resistance = $resistance;
	} 
}