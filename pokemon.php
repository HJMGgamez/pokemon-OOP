<?php 

class Pokemon
{
  public $name;
  private $specie;
  protected $energytype;
  protected $hitpoints;
  protected $currentHealth;
  protected $weakness;
  protected $resistance;
  protected $moves;
  //makes a pokemon.
  public function __construct($name, $specie, $energytype, $hitpoints,
                              $currentHealth, $weakness, $resistance,
                          	  $moves)
  {
    $this->name = $name;
    $this->specie = $specie;
    $this->energytype = $energytype;
    $this->hitpoints = $hitpoints;
    $this->currentHealth = $currentHealth;
    $this->weakness = $weakness;
    $this->resistance = $resistance;
    $this->moves = $moves;
  }
    //will calulate the damage the pokemon takes
    public function attack($target, $attack)
    {
      $damage = $this->moves->attack[$attack][1];
      if ($this->energytype->Type === $target->weakness->type) {
        $damage *= $target->weakness->multiplier;
      }
      if ($this->energytype->Type === $target->resistance->resistance) {
        $damage -= $target->resistance->reduce;
      }
      $this->damageCalculation($damage, $target);
      return $target->currentHealth;
    }
    private function damageCalculation($damage, $target)
    {
      $target->currentHealth -= $damage;
    }
    public function getSpecie()
    {
      return $this->specie;
    }
}