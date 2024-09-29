<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    
    <form action="dadosform.php" method="post">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" id="nome" type="text" name="name" placeholder="Digite seu nome"> <br>

        <label for="email" class="form-label">E-mail</label>
        <input class="form-control" id="email" type="text" name="mail_address" placeholder="Digite seu e-mail"> <br>

        <label for="cpf" class="form-label">CPF</label>
        <input class="form-control" id="cpf" type="text" name="person_id" placeholder="Digite seu CPF"> <br>

        <input class="btn btn-primary" type="submit" value="Cadastrar" />
    </form>
</body>
</html>