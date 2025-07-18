<?php
enum TipoConta {
    case Corrente;
    case Investimento;
    case Poupanca;
    case Universitaria;
}

class Conta {
    public TipoConta $tipoConta;
    public float $saldo;
    public string $nomeTitular;

    public function __construct(string $nomeTitular, float $saldo, TipoConta $tipoConta) {
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
        $this->tipoConta = $tipoConta;
    }

    public function possuiTaxas(): bool {
        return $this->tipoConta == TipoConta::Corrente || $this->tipoConta == TipoConta::Investimento;
    }
}

// Teste - 1
$conta = new Conta("John Doe", 1000, TipoConta::Poupanca);
var_dump($conta);
echo "Possui taxa?"."\n";
var_dump($conta->possuiTaxas());

//Teste - 2
$conta = new Conta("Jane Doe", 3000, TipoConta::Investimento);
var_dump($conta);
echo "Possui taxa?"."\n";
var_dump($conta->possuiTaxas());

//Teste - 3
$conta = new Conta("Jim Doe", 600, TipoConta::Universitaria);
var_dump($conta);
echo "Possui taxa?"."\n";
var_dump($conta->possuiTaxas());
?>


