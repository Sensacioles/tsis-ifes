<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Dados cadastrados:</h1>
    <?php
        $nome = $_POST['name'];
        $email = $_POST['mail_address'];
        $cpf = $_POST['person_id'];
        
        if(isset($nome) || isset($email) || (isset($cpf) && strlen($cpf) === 11)){
            echo "Dados cadastrados com sucesso!"."<br>";
            echo "Nome: ".$nome."<br>";
            echo "Endereço de e-mail: ".$email."<br>";
            echo "CPF: ".$cpf."<br>";
            echo "Horário do cadastro: ".date( 'd/m/Y H:i:s', $_SERVER['REQUEST_TIME']);
        }
        else{
            echo "Dados inválidos!";
        }
    ?>
</body>
</html>