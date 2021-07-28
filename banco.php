<?php

		$pdo = new PDO('mysql:host=localhost;dbname=projeto','root','');
if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

	$sql = $pdo ->prepare("INSERT INTO `clientes`VALUES(null,?,?,?,md5(?))");

		$sql->execute(array($nome,$cpf,$email,$senha));
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Completo</title>
	<link rel="stylesheet" href="css/style2.css">
</head>
<body>

	
	<form id="main2" action="index.html" method = "POST">

		<div id= "informacao" style="font-size: 20px;"> 
		<h4> Cadastro realizado com sucesso! </h4>
		</div>

		<div class = "botao">
		<input type="submit" name="voltar" value="VOLTAR">
		</div>

	</form>
	
</body>
</html>