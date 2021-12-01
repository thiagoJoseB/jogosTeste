<?php


$nome = (string) null;
$valor = (float) 0;
$dataLancamento = (string) null;
$destaques = (int) 0;
$promocao = (float) 0;
$descricao =(string) null;
$id = (int) 0;




$modo = (string) "Salvar";

require_once('funcoes/config.php');


//require_once(SRC.'bd/conexaoMysqlJogos.php');
//
//conexaoMysql();


 require_once(SRC.'controles/exibeDadosJogos.php');

?>
  

 <!DOCTYPE>
<html lang="pt-br">
   
   
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"
        type="text/css"
        href="css/style.css">
        <meta charset="utf-8">
        
    
    </head>
    
    
    

    
    
  <body>
      
      <form action="controles/recebeDadosJogos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post">
      
        <div id="cadastro">
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">NOME</label>
        <input type="text" name="txtNome" class="inputCadastro" value="<?=$nome?>">
            <h1 id="texto">selecione caso seja um destaque </h1>
            
        </div> 
            
       <div class="cadastroUsuario">
            
        <label class="labelRegistro">VALOR</label>
        <input type="number"  name="txtValor" class="inputCadastro" value="<?=$valor?>">
            
        </div>  
        
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">DATA</label>
        <input type="date"name="txtData"   class="inputCadastro" value="<?=$dataLancamento?>">
          
                                 
        </div>
            
            
        <div class="cadastroPromo">
            
        <label id="labelPromocao">DESTAQUE</label>
        <input type="radio"  name="txtDestaque"   id="promocao" value="<?=$destaques?>">
                              
        </div>
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">Promocao</label>
        <input type="number"  name="txtPromocao"   class="inputCadastro" value="<?=$promocao?>">
                         
        </div>
            
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">Descricao</label>
        <input type="text"  name="txtDescricao"   class="inputCadastro" value="<?=$descricao?>">
                         
        </div>
            
            
     <input id="botao"type="submit" value="<?=$modo?>" name="btnEnviar">
        
        
        
        </div>
          
          <div id="imagem">
              
          <img id="imgfoto">
            
          
          
          </div>
          
    </form>
      
      
 
      
    
            
      <table class="tblRegistro" >
          <tr>
              <td class="colunasRegistro">
              NOME
              </td>
              <td class="colunasRegistro">
             IMAGEM
              </td>
             <td class="colunasRegistro">
              VALOR
              </td>
              <td class="colunasRegistro">
              DATA
              </td>
              <td class="colunasRegistro">
              DESTAQUE
              </td>
              <td class="colunasRegistro">
              PROMOCAO
              </td>
              <td class="colunasRegistro">
              DESCRICAO
              </td>
              
              <td class="clnRegistro"></td>
          
          
          </tr>
          
           <?php 
                    $dadosJogos = exibirJogos();
                    
                    while  ($rsJogos=mysqli_fetch_assoc($dadosJogos))
                    {
                ?>
          
          
          
          
        <tr>
              <td class="colunasResultado"><?=$rsJogos['nome']?></td>
              <td class="colunasResultado"></td>
            <td class="colunasResultado"><?=$rsJogos['valor']?></td>
              <td class="colunasResultado"><?=$rsJogos['dataLancamento']?></td>
            <td class="colunasResultado"><?=$rsJogos['destaque']?></td>
              <td class="colunasResultado"><?=$rsJogos['promocao']?></td>
            <td class="colunasResultado"><?=$rsJogos['descricao']?></td>
             <td class="colunasResultado"></td>               

             
             
               <td class="clnRegistro">
               
                <a href="">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                        <a onclick=""
                           href="">
                            
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                   
                   
               </td>
          
          
          </tr>
         <?php
          
            }
                    
        ?>            
      
      </table>
      
    
    
    </body>
</html>