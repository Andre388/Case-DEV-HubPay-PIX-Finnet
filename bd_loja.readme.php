<php?

echo "estrutura do banco de dados:<br>";

echo "database name: loja<br>";

//----------------------------------

public function dados(){

  echo "create table clientes(
  codigo int(4) AUTO_INCREMENT,
  nome varchar(30) NOT NULL,
  email varchar(50),
  data_de_cadastro varchar(10),
  PRIMARY KEY(codigo)
  );";
  
  echo dados();
  echo "<br>";
  
  ?>
