<?php
namespace ScreenMatch\Modelo;
class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public int $temporadas,
        public int $episodiosPorTemporada,
        public int $minutosPorEpisodio
    ){
        //acesso aos metodos da classe base = titulo
        parent::__construct($nome, $anoLancamento, $genero);
    }

    #[\Override]
    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }
}