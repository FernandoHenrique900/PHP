<?php
namespace ScreenMatch\Modelo;
use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * @throws NotaInvalidaException Se a nota for negativa ou maior que 10
     */

    public function avalia(float $nota): void
    {
        if ($nota <0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }
    public function media(): float
    {
        $somaNotas = array_sum($this->notas);   //OBS-NÃO DA ERRO
        $quantidadeNotas = count($this->notas); //OBS-NÃO DA ERRO

        return $somaNotas / $quantidadeNotas;   //OBS-ERRO NA DIVISÃO POR ZERO
    }
}