<?php 

//Header
include 'header.php';

?>

<?php

function validaLogin($email, $senha) {
    require_once 'banco.php';

    $senhaCriptografada = md5($senha);

    // Consulta no banco de dados
    $sql = "SELECT * FROM usuario";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $email, $senhaCriptografada);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Valida credenciais
    if ($resultado->num_rows > 0) {
        return true;
    } else {
        echo "Erro: Usuário ou senha incorretos!<br>";
        return false;
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if (validaLogin($email, $senha)) {
		session_start();
		$_SESSION['logado'] = true;
		exit;
	} else {
		echo "Acesso negado.";
	}
}
?>

<link rel="stylesheet" href="css/login.css">

 <div class="global-container"> 
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Autenticação do usuário</h3>
		<div class="card-text">
		<form method="POST" action="">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" required>
			<br>
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" required>
			<br>
			<button type="submit">Entrar</button>
		</form>
		</div>
	</div>
</div>
</div> 

<?php require 'footer.php';?>