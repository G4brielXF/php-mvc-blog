<?php

//Arquivo index responsável pela inicialização do sistema
require 'vendor/autoload.php';

//require 'rotas.php';
use sistema\Biblioteca\Upload;

$upload = new Upload('upload');

if(!empty($arquivo = $_FILES)){
    $arquivo = $_FILES['arquivo'];
    $upload->arquivo($arquivo, 'textos');
}