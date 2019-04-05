<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
  	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Pokemon</title>
  </head>
  <body>
	<?php 
		require 'Pokemon.php';
		require 'Charmeleon.php';
		require 'Pikachu.php';
		require 'Weakness.php';
		require 'Resistance.php';
		require 'Moves.php';
		require 'Energytype.php';
		//adds the pikachu dave.
		$dave = new Pikachu(
			'dave',
			60
		);
		//adds the charmeleon jan.
		$jan = new Charmeleon(
			'jan',
			60
		);
    	echo $jan->name. charmeleon::damageCalculationC($dave->move2->damage,$dave->lighting->Type,$jan->weakness->weakness, $jan->weakness->multiplier, $jan->resistance->resistance, $jan->resistance->reduce, $dave->currentHealth). '<br>';
    	echo $dave->name. pikachu::damageCalculationP($jan->move2->damage,$jan->fire->Type,$dave->weakness->weakness, $dave->weakness->multiplier, $dave->resistance->resistance, $dave->resistance->reduce, $jan->currentHealth);
	?>
    <main>
      <section>
        <img src="img/pikachu.jpg" alt="Pikachu">
        <div id="bottom"><div id="top1"></div></div>
        <p>Name: <?= $dave->name ?><br/>Pokemon: <?= $dave->specie ?></p>
      </section>
      <section>
        <img src="img/Charmeleon.jpg" alt="Charmeleon">
        <div id="bottom"><div id="top2"></div></div>
        <p>Name: <?= $jan->name ?><br/>Pokemon: <?= $jan->specie ?></p>
		</form>
      </section>
    </main>
  </body>
</html>