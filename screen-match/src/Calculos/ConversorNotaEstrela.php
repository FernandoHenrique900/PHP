<?php
 namespace ScreenMatch\Calculos;
 use ScreenMatch\Modelo\Avaliavel;
class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {

        $nota = $avaliavel->media();
        //Realiza a conversão
        return round($nota) / 2; //formula p/ qtd de estrelas
    }
}