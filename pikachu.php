<?php 
	require 'pokemon.php';
class pikachu extends Pokemon
{
	public $species = 'pikachu';
	public function __construct($name , $energyType , $hitpoints , $currentHealth , $moves , $weakness, $resistance)
	{
		parent::__construct($ths->$species , $name , $energyType , $hitpoints , $currentHealth , $moves , $weakness, $resistance);
	}
}