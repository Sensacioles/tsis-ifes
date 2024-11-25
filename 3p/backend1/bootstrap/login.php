<?php 

//Header
include 'header.php';


?>

<?php
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

function validaLogin($email, $senha) {
    $emailValido = "usuario@teste.com";
    $senhaValida = "12345";

    return filter_var($email, FILTER_VALIDATE_EMAIL) && $email === $emailValido && $senha === $senhaValida;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>E-mail inválido</p>";
    } elseif (validaLogin($email, $senha)) {
        header('Location: consultar.php');
        exit();
    } else {
        echo "<p>Login ou senha incorretos</p>";
    }
}
?>

<link rel="stylesheet" href="css/login.css">

 <div class="global-container"> 
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Autenticação do usuário</h3>
		<div class="card-text">
			
			<form>
			
				<div class="form-group">
					<label for="exampleInputEmail1">Email:</label>
					<input type="email" class="form-control form-control-sm" name="txtemail" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Senha:</label>					
					<input type="password" class="form-control form-control-sm" name="txtsenha">
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="btlogin">Login</button>
				
				
				
			</form>
		</div>
	</div>
</div>
</div> 

<?php require 'footer.php';?>

   