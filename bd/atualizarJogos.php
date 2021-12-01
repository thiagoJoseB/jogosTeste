<?php


require_once('../bd/conexaoMysqlJogos.php');



function editar($arrayJogos)
{
    
    $sql = "update tbljogos set 
            nome = '".$arrayJogos['nome']."',
            valor = '".$arrayJogos['nome']."',
            dataLancamento = '".$arrayJogos['data']."',
            destaques = '".$arrayJogos['destaques']."',
            promocao = '".$arrayJogos['promocao']."',
              descricao = '".$arrayJogos['descricao']."'
             where idjogos = ".$arrayJogos['id'];
            
           $conexao = conexaoMysql();
       
        if (mysqli_query($conexao, $sql))
            return true; 
        else
            return false;  
            
            
            
            
            
            
    
    
    
}







?>