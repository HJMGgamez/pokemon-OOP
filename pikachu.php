<?php
#makes a pokemon pikachu and extends the pokemon class
class Pikachu extends Pokemon
{
  public $specie = 'Pikachu';
  public $hitpoints = 60;

  #makes a pikachu
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
	parent::__construct($name, $this->specie, $this->lighting, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->move1 , $this->move2);
  }
  #will calulate the damage the pokemon takes
  public static function damageCalculationP($Damage, $energytype, $weakness, $multiplier, $resistance, $reduce, $health)
  {
  	if ($energytype === $weakness) {
      $dam = $Damage * $multiplier;
    } elseif ($energytype === $resistance) {
    	$dam = $Damage - $reduce;
    } else{
      $dam = $Damage; 
    }
    $cHealth = $health - $dam ;
    return ' doet '.$dam. ' damage health is '.$cHealth;
  }
}