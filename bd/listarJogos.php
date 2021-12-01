<?php


require_once(SRC.'bd/conexaoMysqlJogos.php');

function listar()
{
    
   
    $sql = "select * from tbljogos order by idjogos desc";
    
    $conexao = conexaoMysql();
    
    
    
    
    $select = mysqli_query($conexao, $sql);
    
    return $select;
    
    
    
}


function buscar ($idJogos)
{
    $sql = "select * from tbljogos
            where idjogos = ".$idJogos;
    
    //Abre a conexão com o BD
    $conexao = conexaoMysql();
    
    
    
    //Solicita aoBD a execução do script SQL
    $select = mysqli_query($conexao, $sql);
    
   return $select;

}

?>