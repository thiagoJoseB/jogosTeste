<?php


require_once('../funcoes/config.php');


require_once(SRC.'bd/listarJogos.php');




$idJogos = $_GET['id'];



$dadosJogos = buscar($idJogos);



if($rsJogos=mysqli_fetch_assoc($dadosJogos))
{
   session_start(); 
    
  $_SESSION['jogos'] = $rsJogos; 
    
  header('location:../index.php');
    
} else
       echo("
                <script>
                   alert('". BD_MSG_ERRO ."');
                   window.history.back(); 
                </script>
           ");





?>