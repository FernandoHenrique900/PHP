<?php
namespace ScreenMatch\Modelo;
class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public int $duracaoEmMinutos
    ){
    //acesso aos metodos da classe base = titulo
    parent::__construct($nome, $anoLancamento, $genero);
    }
    public function duracaoEmMinutos():int
    {
        return $this->duracaoEmMinutos;
    }
}

