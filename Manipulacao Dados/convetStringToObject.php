<?php

$stringJson = '{"nome":"David","anoNascimento":1982,"profissão":"Engineer"}';

var_dump(json_decode($stringJson, true));