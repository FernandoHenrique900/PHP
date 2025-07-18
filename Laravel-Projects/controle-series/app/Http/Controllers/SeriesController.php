<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries() /* inicio do metodo criado p/listar series */
    {
        $series =['Lost','Dare Devil','Braking Bad'];

    $html = '<ul>';
    foreach($series as $serie){
        $html .= "<li>'$serie'</li>";
    }
    $html .= '</ul>';
    echo $html;
    }
}
