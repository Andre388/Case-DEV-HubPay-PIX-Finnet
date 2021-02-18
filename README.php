<?php

# Case-DEV-HubPay-PIX-Finnet
// Desafio de fazer Migração de uma Integração que temos com a ADIQ. 1) criado um e-commerce com Metodo que Solicita pagamentos, Consulta de Pagamentos, Metodo de Cancelamento // por Transação utilizando Header e PARAM!
echo "arquivo:<br>";
// Minha estrutura de arquivos desse projeto se resume:
// 1-pasta contendo os arquivos de imagem do e-commerce
// 2-pasta contendo arquivos editados em .JS
// 3-pasta contendo arquivos formatações do tipo CSS.*/


// seguindo: */
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*foi criado 04 arquivos:
-index.php (principal) esse arquivo index.php foi estruturado e criado as <sections> para que contem as divs do cabeçalho principal.
ainda nesse arquivo foram criada 05 <sections> que respectivamente contém: cabeçalho_principal, cabeçalho_do_Meio, cabeçalho_inferior, barra_de_navegação no cabecalho_principal, além do menu <nav> no cabecalho_do_meio.
Apartir desta estrutura foram criados ids, e class dentro das <nav> das duas estruturas para aplicar o CSS.*/
//-------------------------------------------------------------------------------------------------------------------------------------
/*-cabecalho.php (secundario) esse file foi criado contendo a parte de estilização que o arquivo index.php ira herdar, usando o include_once("cabecalho.php") incluindo todas as propriedades desse arquivo referente ao layout! na parte de inclusão fica abaixo do <header>.
Esse arquivo contém toda a estrutura que o index.php ira receber.*/
//-------------------------------------------------------------------------------------------------------------------------------------
/*-CSS.CSS (secundario) nesse arquivo se armazena o CSS da pagina principal index.php do e-commerce, e do cabecalho.php:
-foi utilizado ajustes nos #id como height, width, text-aling, position,background-color e background. além de efeitos com cursor, e hover dentro dos <nav> do arquivo.
-foram estilizados os Menus da nav, removendo os text-decoration, e cores padrão que herdam a div, display;left além de display-flex e flex-Direction:row, ajuste do layout
-par a ficar em Linha e não em sequencia.
No meu de navegação foi estilizado com position-bottom-left e background solid.
finalização do Rodape e o logo da Pagina.*/
//-------------------------------------------------------------------------------------------------------------------------------------
/*-connexão.php
criei um arquivo de conexão ao banco de dados usando PHPmyadmin, eu defini as variaveis principais com estou hospedando localmente serão:
$root, $usuario, $senha, $bd. após eu ter criados as variaveis nessa ordem, eu criei um novo objeto instanciando chamado: $mysqli
fiz um if, para verificação de erro caso não pegue a conexao (connect_errno) a função verifica se ha algum erro no banco de dados que retorna falso.
e informa a descrição do erro.*/
//-------------------------------------------------------------------------------------------------------------------------------------
/*-index.php (principal) Note, que eu trouxe meu arquivo de conexão lá no index.php chamado: include("conexão.php")
-Fiz os testes de conexão com o banco de dados.
-dentro do PHPMyadmin foi criado o banco de dados dos clientes.*/
//------------------------------------------------------------------------------------------------------------------------------------
/*-BD_PHPmyAdmin:
-No banco de dados foi criado um banco de dados de clientes do e-commerce previamente cadastrados:
created database, use, create table "clientes", insert into tabela("","","","") values ("","","",""); select from * e drop database ou drop table além do where. (o basico de BD)*/
------------------------------------------------------------------------------------------------------------------------------------
/* voltando no meu index.php do meu e-commerce:
criada uma variavel: $consulta = select * from "nome_da_tabela";(essa consulta vai selecionar todas as linhas e colunas da tabela ("tabela")
agora que eu ja tenho minha consulta, eu vou chamar a função, vou criar uma variavel $con e vou armazenar ela minha consulta (isso vai efetuar a minha consulta e vai mostrar se tiver erros.*/
//------------------------------------------------------------------------------------------------------------------------------------
/*No index.php note que foi criado uma estrutura de colunas, e nelas inserido o nome das colunas
  1-codigo, 2-e-mail, 3-data, 4-data de cadastro.
  ex: */
  
  ?>
  <!DOCTYPE html>
  <html>
  <head>  
  <meta charset="utf-8">
    <title>tabela</title>
    <link rel="stylesheet" href="CSS/CSS.css">
    </head>
    <body id="corpo da pagina">
    <table border="1">
      <tr>
        <td> Codigo </td>
        <td> Nome   </td>
        <td> e-mail </td>
        <td> Data de Cadastro </td>
    </tr>
    aqui vai a função em php:
    <?php while($dado = $con->fetch_array()) }  ?>
    <!-- essa função ela pega a variavel $con e a fetch_array vai armazenar na variavel $dado -->
    <tr>
      <td><?php echo $dado["tabela"];?></td>
      <td><?php echo $dado["codigo"];?></td>
      <td><?php echo $dado["email"];?></td>
      <td><?php echo date("d/m/Y", strtotime($dado["datadecadastro"]));?></td>
      <td><a href="editar.php?codigo=<?php echo $dado["codigo"];?>Editar</a> |
        <a href="excluir.php?codigo=<?php echo $dado["codigo"];?>Excluir</a></td>
    </tr><!--fim da tr-->
    </table><!-- fim da table-->
</body>
</html> <!--fim do arquivo -->
<?php
  echo "<br>";
  echo "note que na parte da date tive que converter para o formato brasileiro usando strtotime do timestamp <br>";
  echo "esse e o exemplo que queria mostrar dele pegando as informações do <br> Banco de dados PHPmyadmin usando o localhost:8080 porta 3039, br ou 127.0.0.1";
  echo "foi inserido dois botãos que levarão a links para edição desses dados dos clientes dentro do index.php <br>";
  

  //------------------------------------------------------------------------------------------------------------------------------------
  echo "depois la no CSS eu vou estilizar a minha tabela, br posso criar classe, border, colocar ids na <table> br enfim so consegui fazer a conexão e estilizar o e-commerce!";
  echo "Este e o Fim do arquivo README br";
  echo "Favor considerar todo o trabalho afim de mesmo de não houver integração com os meios de pagamento.br";
  //------------------------------------------------------------------------------------------------------------------------------------
  //-END README.
  
?>
  
  
  
  
  
  
