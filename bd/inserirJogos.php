<?php


require_once('../bd/conexaoMysqlJogos.php');


function inserir ($arrayJogos)
{
    
    $sql = "insert into tbljogos
         (
           nome,
           destaques,
           promocao,

           )
           values
        (
         '". $arrayJogos['nome'] ."',
         
         '". $arrayJogos['destaques'] ."',
         '". $arrayJogos['promocao'] ."'
        

             

         
       
    )
    
    
    ";

    
    $conexao = conexaoMysql();
//    
//    echo($sql);
//    die;
//    var_dump($sql);
//    die;
    
    
    
    if(mysqli_query($conexao, $sql))
        return true;
//    echo('foi 1');
    
    else
        return false;
//    echo('nao foi 1');
    
//    die;
}











?>