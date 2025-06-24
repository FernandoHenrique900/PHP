<?php

enum DiaDaSemana : int{
    case Domingo = 0;
    case Segunda = 1;
    case Terca = 2;
    case Quarta = 3;
    case Quinta = 4;
    case Sexta = 5;
    case Sabado = 6;

    public function ehFimDeSemana(): bool
    {
        return $this === DiaDaSemana::Sabado || $this === DiaDaSemana::Domingo;
    }
}

class Funcionario{

    public function __construct(
        public string $nome,
        public float $salario,
        public DiaDaSemana $diaSemanaPagamento
    ){
    }
}

$johndoe = new Funcionario ('John Doe', salario:1100, diaSemanaPagamento: DiaDaSemana::Domingo);
var_dump($johndoe->diaSemanaPagamento->ehFimDeSemana());

var_dump(DiaDaSemana::from(4));
