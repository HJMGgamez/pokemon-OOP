<?php 
//makes a pokemon charmeleon and extends the pokemon class
class Charmeleon extends Pokemon
{
  private $specie = 'Charmeleon';
  protected $hitpoints = 60;
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
    $this->moves = new Moves([['Head Butt', 10],['Flare', 30]]);
    $this->energytype = new Energytype(Energytype::FIRE);
    
    parent::__construct($name, $this->specie, $this->engerytype, $this->hitpoints, $currentHealth, $this->weakness, $this->resistance, $this->moves);
  }
}