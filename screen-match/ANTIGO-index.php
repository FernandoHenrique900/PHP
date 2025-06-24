<?php
//caminho absoluto para funcoes

//require ou include ??? verificar
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao Screen Match!\n";

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

$filme = criaFilme(
    nome:"Thor:Ragnarok",
    anoLancamento: 2021,
    nota: 7.8, 
    genero: "super-herói"
);

echo $filme->anoLancamento;

//MANIPULAÇÃO DE ARRAYS

//mostra valores dos arrays
echo "Array puxado \n";
var_dump($notas);

//organiza array por valor

echo "Array organizado \n";
sort($notas);
//mostra valores dos arrays organizado
var_dump($notas);


//funcão que mostra o menor numero do array
echo "Menor nota \n";
$menorNota = min($notas);
echo "$menorNota \n";

var_dump($filme ->nome);

//função busca 2 pontos ':'.
$posicaoDoisPontos = strpos($filme->nome,':');

var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos ));

//Encode p/JSON
//echo json_encode($filme);

//Decode p/JSON
//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true));

//Transforma/Salva em um arquivo JSON local.
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . "/filme.json", $filmeComoStringJson);
?>