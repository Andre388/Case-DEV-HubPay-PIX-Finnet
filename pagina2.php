<?php

include("classes/conexao.php");
$consulta = "SELECT * FROM clientes; 
$con = $mysqli->query($consulta) or die ($mysqli->error);
// 1- eu criei uma variavel ($consulta) que vai armazenar da minha tabela (clientes) todas as linhas e colunas.
// 2- eu criei uma variavel ($con) que recebe $mysqli que declarei na ("conexão.php") e apontei para variavel ($consulta), se não der certo ele vai matar a execução e mostrar o erro ($mysqli->error)
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E-commerce do Andrezinho Page 02</title>
    <link rel="stylesheet" href="css\css.css">
  </head>
  <body><!-- iniciando a criação das table -->
  <table border="1">
    <tr id="table 01"> <!-- inicio da da tabela -->
      <td> nome </td>
      <td> consulta </td>
      <td> data de cadastro</td>
      <td> tabela </td>
    </tr>
    <tr>
    <!-- Abre um while e usa a função fech_array()); -->
    <!-- Dentro do meu while eu vou criar uma variavel $dado que recebe $con apontando -> pra função: fech_array(); -->
    <!-- O que essa funçao vai fazer: Ela pega cada uma dessas colunas, e armazena em uma variavel no caso: $dado; 
      
      <td> <?php while($dado) = $con->fech_array()); { ?> </td>
      
      <!-- agora detro dos <td></td> eu vou colocar a minha variavel $dado pra exibir os valores do banco de dados PHPmyadmin que ta criado -->
      <!-- como eu quero mostrar o codigo eu uso ["codigo'] -->
      
      <td><?php echo $dado["codigo"]; ?></td>
      <td><?php echo $dado["nome"];</td>
      <td></td>
    <?php } ?>  <!-- fecha o arquivo php-->
  </table>
  </body>
</html><!-- fim do arquivo de conexão -->

    
    
