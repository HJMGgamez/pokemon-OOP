<?php 
class Charmeleon extends Pokemon
{

  public $specie = 'Charmeleon';
  public $hitpoints = 60;
  public $Move1;
  public $Move2;
  public $fire;
  public $Weakness;
  public $resistance;

  public function __construct($name, $currentHealth)
  {
  	$this->Weakness = new Weakness(
		'water',
		2
	);
	$this->Resistance = new Resistance(
		'lighting',
		10
	);
  	$this->Move1 = new Moves('Head Butt', 10);
  	$this->Move2 = new Moves('Flare', 30);
  	$this->fire = new Energytype('fire');
	parent::__construct($name, $this->specie, $this->fire, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->Move1 , $this->Move2);
  }
  public static function damageCalculationC($damage, $pokemon)
  {
  	if ($energytype === $weakness->Weakness) {
      $damage = $damage * $weakness->Multiplier;
    }
    if ($energytype === $Resistance->Resistance) {
      $damage = $damage - $Resistance->Reduce;
    }
    if ($damage < 0) {
      $damage = 0;
    }
    return $damage;
  }
}