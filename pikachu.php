<?php
//makes a pokemon pikachu and extends the pokemon class
class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;

  //makes a pikachu
  public function __construct($name, $currentHealth)
  {
    $this->weakness = new Weakness(
        'fire',
        1.5
    );
    $this->resistance = new Resistance(
        'fighting',
        20
    );
    $this->move1 = new Moves('pika punch', 20);
    $this->move2 = new Moves('Electric Ring', 50);
    $this->lighting = new Energytype('lighting');
	parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->move1 , $this->move2);
  }
  public function damageCalculation($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->lighting->Type === $target->weakness->type) {
      $damage = $damage * $target->weakness->multiplier;
    }
    if ($this->lighting->Type === $target->resistance->resistance) {
      $damage = $damage - $target->resistance->reduce;
    }
    $health = $target->currentHealth - $damage;
    return ' doet '.$damage. ' damage. health is '.$health;
  }
}