<?php 
$host = 'localhost';
$user = 'etecia';
$pwd = '123456';
$db = 'dbPadaria';



$con = mysqli_connect($host,$user,$pwd,$db);

if (mysqli_connect_errno()){
	echo "Erro ao conectar com a base de dados " . mysqli_connect_error();
} else {

	$sql = 'create table tbPessoas(
	codPessoa int not null auto_increment,
	nome varchar(100),
	email varchar (100),
	telCel char (10),
	primary key (codPessoa))';

	if (mysqli_query($con, $sql)){
		echo "Tabela criada";
	}

	mysqli_close($con);
}

 ?>