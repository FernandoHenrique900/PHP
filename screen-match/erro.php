<?php

use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;

require 'autoload.php';

$serie = new Serie('BreakingBad',2013, Genero::Drama, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

try{
    $episodio -> avalia(20);
    $episodio -> avalia(-5);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch(NotaInvalidaException $e){
    echo "Ocorreu um problema: ". $e->getMessage()."\n";
} finally {
    echo 'Tente novamente';
}
