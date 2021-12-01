<?php



require_once('../funcoes/config.php');

require_once(SRC.'bd/inserirJogos.php');


$nome = (string) null;
$valor = (float) 0;
$dataLancamento = (string) null;
$destaques = (int) 0;
$promocao = (float) 0;
$descricao =(string) null;
$id = (int) 0;



$foto = (string) null;

//if(isset($destaques)){
//    return true;
//}else 
//    return false;






if (isset($_GET['id']))
    
    $id = (int) $_GET['id'];
else
    $id = (int) 0;




if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
    
$nome = $_POST['txtNome'];
//$valor = $_POST['txtValor'];
//$dataLancamento = $_POST['txtData'];
$destaques  = $_POST['txtDestaque']; 
$promocao  = $_POST['txtPromocao'];
//$descricao  = $_POST['txtDescricao'];
    
    
if($nome == null || $valor = null || $dataLancamento = null || $descricao = null)
     echo("<script> 
                alert('". ERRO_CAIXA_VAZIA ."'); 
                window.history.back();    
            </script>");
elseif(strlen ($nome)>100) 
    echo("<script> 
                alert('". ERRO_MAXLENGHT ."'); 
                window.history.back();    
            </script>");
else{ 




$jogos = array(
   "nome"    => $nome,
//    "valor"   => $valor,
//    "dataLancamento"  =>$dataLancamento,
    "destaques" => $destaques,
    "promocao" => $promocao,
//    "descricao" => $descricao,
    "id"  =>  $id
    
    
    
 );
    
    var_dump($jogos);
    die;
    
if(strtoupper($_GET['modo']) == 'SALVAR')
{    
    
if(inserir($jogos))
     echo("
            <script>
                alert('". BD_MSG_INSERIR ."');
                 window.location.href = '../index.php';
            </script>
                ");
    
    else
        echo("
             <script>
                alert('". BD_MSG_ERRO ."');
                window.history.back(); 
             </script>
                ");
      
    
    
}
  
    elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
{
   if (editar($jogos))
                echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../index.php';
                    </script>
                ");
            else
                echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                "); 
    


    }
   }
}


?>