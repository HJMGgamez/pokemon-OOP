<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
  	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Pokemon</title>
  </head>
  <body>
	<?php 
		require 'Init.php';
		//adds the pikachu, dave.
		$dave = new Pikachu(
			'dave',
			60
		);
		//adds the charmeleon, jan.
		$jan = new Charmeleon(
			'jan',
			60
		);
    	echo $jan->name. $jan->attack($dave, 1). '<br>';
			echo $dave->name. $dave->attack($jan, 1);
	?>
    <main>
      <section>
        <img src="img/pikachu.jpg" alt="Pikachu">
        <div id="bottom"><div id="top1"></div></div>
        <p>Name: <?= $dave->name ?><br/>Pokemon: <?= $dave->getSpecie() ?></p>
      </section>
      <section>
        <img src="img/Charmeleon.jpg" alt="Charmeleon">
        <div id="bottom"><div id="top2"></div></div>
        <p>Name: <?= $jan->name ?><br/>Pokemon: <?= $jan->getSpecie() ?></p>
		</form>
      </section>
    </main>
  </body>
</html>