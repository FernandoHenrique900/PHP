<?php

//Função que define se é ou não lançamento.
function exibeMensagemLancemento(int $ano): void{
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
    echo "Esse filme não é um lançamento\n";
    }
}
//Função que define se esta incluso no plano.
function incluidoNoPlano(bool $planoPrime, int $anoLancamento){
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2021;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancemento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano \n"];

//MANIPULAÇÃO DE ARRAYS

//mostra valores dos arrays
var_dump($notas);
//organiza array por valor
sort($notas);
//mostra valores dos arrays organizado
var_dump($notas);
//funcão que mostra o menor numero do array
$menorNota = min($notas);
echo $menorNota;

var_dump($filme ['nome']);

//função busca 2 pontos ':'.
$posicaoDoisPontos = strpos($filme['nome'],':');

var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos ));

?>