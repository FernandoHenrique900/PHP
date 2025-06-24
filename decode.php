<?php
$arquivo = fopen(filename: 'nomes.csv', mode:'w');

fputs ($arquivo, "nomes" . PHP_EOL);
$nomes = [
    'João  €',
    'Vinícius',
    'Patrícia',
    'Graça'
];

foreach ($nomes as $nome) {
    fputs ($arquivo,
        mb_convert_encoding($nome, to_encoding:'Windows-1252', from_encoding:'UTF-8') . PHP_EOL);
}
fclose($arquivo);
