<?php

$sImagem = '/home/moobi/Área de Trabalho/cafe-2.jpg';

if(file_exists($sImagem)){
    header('Content-Type: image/jpeg');
    readfile($sImagem);
}else{
    echo '<h1>Imagem não encontrada.</h1>';
}

