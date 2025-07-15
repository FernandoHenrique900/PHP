<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme, Serie, Episodio, Genero, Titulo
    };

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela,
    };

echo "Bem-vindo(a) ao Screen Match!\n";

$filme = new Filme(
    'Star Trek',
    1968,
    Genero::FiccaoCientifca,
    115,
);

$filme->avalia (8);

var_dump($filme);

echo $filme -> nome . "\n";
echo $filme -> anoLancamento . "\n";
echo $filme -> duracaoEmMinutos ."\n";
//echo $filme -> genero . "\n";
//echo $filme -> media . "\n";


$serie = new Serie('Lost', 2001, Genero::FiccaoCientifca, 5, 20, 45);
$episodio = new Episodio($serie,'Piloto',1);

$serie -> avalia(9);

var_dump($serie);

echo $serie -> nome . "\n";
echo $serie->anoLancamento ."\n";
echo $serie -> temporadas . "\n";
echo $serie ->episodiosPorTemporada ."\n";
echo $serie -> minutosPorEpisodio ."\n";
//echo $serie -> genero  . "\n";
//echo $serie->media() .'\n';

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, voce precisa de $duracao minutos";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) ."\n";
echo $conversor->converte($filme) ."\n";