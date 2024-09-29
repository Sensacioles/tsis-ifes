<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Self</title>
</head>
<body>
    <form action="cadclienteself.php" method="post">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" id="nome" type="text" name="name" placeholder="Digite seu nome"> <br>

        <label for="email" class="form-label">E-mail</label>
        <input class="form-control" id="email" type="text" name="mail_address" placeholder="Digite seu e-mail"> <br>

        <label for="cpf" class="form-label">CPF</label>
        <input class="form-control" id="cpf" type="text" name="person_id" placeholder="Digite seu CPF"> <br>

        <input class="btn btn-primary" type="submit" value="Cadastrar" />
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
        }
        else{
            echo "Cadastro incompleto!";
        }
    ?>
</body>
</html>