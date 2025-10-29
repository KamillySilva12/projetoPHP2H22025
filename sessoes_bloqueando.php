<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bloqueando páginas</title>
<?php 
		session_start();

		$_SESSION['nome'] = $_POST['nome'];

		$_SESSION['senha'] = $_POST['senha'];

?>
</head>
<body>

<b>Funcionários</b> <?php echo $_SESSION['nome'] ?>, logado com sucesso </br>
<b>Data de conexão</b> <?php echo date() ?>, logado com sucesso </br>


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulário de cadastro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css">	
</head>
<body>

<?php 
session_start();

$_SESSION['nome'] ="Administrador";
  ?>

<h1>Cadastro de usuários</h1>

Bem vindo, sr <?php echo  $_SESSION['nome']; ?>

SID desta sessão é: <?php echo session_id(); ?>

	

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

