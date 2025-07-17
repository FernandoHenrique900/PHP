<?php
 namespace ScreenMatch\Calculos;
 //use DivisionByZeroError;
 //use ArgumentCountError;
 use Throwable;
 use ScreenMatch\Modelo\Avaliavel;
class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
            //Realiza a conversão
            return round($nota) / 2; //formula p/ qtd de estrelas
        }catch (Throwable $erro){
            echo $erro ->getMessage();
            return 0;
        }

//         catch(DivisionByZeroError $erro) { //OBS-TRATAMENTO DE ERRO POR ZERO
//            echo $erro->getMessage();
//            return 0;
//         }catch(ArgumentCountError $erro) { //0BS - TRATAMENTO DE ERRO VARIAVEL SOMA S/ ARGUMENTOS
//            echo $erro->getMessage();
//         return 0;}
            }
        }