<?php
$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";

//ABRE O ARQUIVO NA PASTA
$arquivo = fopen($nomeArquivo, 'a');

//ESCREVE NO ARQUIVO
fwrite($arquivo, $novaFrase);

//FECHA O ARQUIVO
fclose($arquivo);