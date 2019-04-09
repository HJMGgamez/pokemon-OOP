<?php 
//makes a pokemon charmeleon and extends the pokemon class
class Charmeleon extends Pokemon
{

  public $specie = 'Charmeleon';
  public $hitpoints = 60;
  //makes a charmeleon
  public function __construct($name, $currentHealth)
  {
    $this->weakness = new Weakness(
        'water',
        2
    );
    $this->resistance = new Resistance(
        'lighting',
        10
    );
    $this->move1 = new Moves('Head Butt', 10);
    $this->move2 = new Moves('Flare', 30);
    $this->fire = new Energytype('fire');
	parent::__construct($name, $this->specie, $this->energytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->move1 , $this->move2);
  }
  public function damageCalculation($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->fire->Type === $target->weakness->type) {
      $damage = $damage * $target->weakness->multiplier;
    }
    if ($this->fire->Type === $target->resistance->resistance) {
      $damage = $damage - $target->resistance->reduce;
    }
    $health = $target->currentHealth - $damage;
    return ' doet '.$damage. ' damage. health is '.$health;
  }
}