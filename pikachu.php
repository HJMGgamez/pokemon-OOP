<?php
class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;
  public $energytype = 'Lightning';

  public function __construct($name, $currentHealth, $weakness, , $resistance)
  {
	parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $weakness, $resistance);
  }
}