<?php

use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Calculos\ConversorNotaEstrela;

require 'autoload.php';

$serie = new Serie('BreakingBad',2013, Genero::Drama, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);


