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

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array
{
    $filme = new Filme();

    $filme->nome = $nome;
    $filme->ano = $anoLancamento;
    $filme->nota = $nota;
    $filme->genero = $genero;

    return $filme;
}