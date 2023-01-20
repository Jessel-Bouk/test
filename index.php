<?php

use Carbon\Carbon;

require "vendor/autoload.php";

$instance = new App\Calcul();
$resultat = $instance->Additionner(30, 20);

$aujourdhui = Carbon::now();


var_dump($aujourdhui->format("d/m/y"), $instance, $resultat);
//echo "Le resultat de la somme est : " . $resultat;

echo "Hello World !";
