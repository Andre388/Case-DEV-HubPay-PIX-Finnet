<?php

/*vou definir as minhas variaveis principais que serão: */
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "loja";

/*agora eu vou criar a variavel que vai armazenar a conexão com o banco de dados que se chamara:*/
/*vai ser chamado varias vezes ao longo do meu projeto*/
// criando um novo objeto e vou definir dentro dela as minhas variaveis (com parametros);
//new object criado Instanciamento:

$mysqli = new mysqli($host, $usuario, $senha, $bd); //estrutura de objeto que criei


//agora vou fazer um if pra verificar se houve algum erro:
if($mysqli->connect_errno) // conexão;
//mostre a mensagem:
echo "falha na conexão: (" .$mysqli->connect_errno. ") ".$mysqli->connect_error; 

// retorna se ouve algum erro se caso não ela retorna false.
// fim do arquivo de conexão ao Banco de dados





?>
