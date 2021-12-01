<?php


require_once(SRC.'bd/listarJogos.php');
    
function exibirJogos()
{
    
    $dados = listar();
    
    return $dados;
    
}




?>