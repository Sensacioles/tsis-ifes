<?php
session_start();
if(isset($_POST['botao-cadastro'])):
    $descricao=filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_SPECIAL_CHARS);
    $data=filter_input(INPUT_POST,'data',FILTER_SANITIZE_SPECIAL_CHARS);
    $preco=filter_input(INPUT_POST,'preco',FILTER_SANITIZE_NUMBER_FLOAT);

    require_once banco.php;

    $sql="INSERT INTO produto(descricao,data,preco) values ('$descricao','data','preco')";
    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem']="Cadastro realizado com sucesso";
        header('Location: consultar.php?sucesso');
    else:
        $_SESSION['mensagem']="Erro no cadastro";
        header('Location: consultar.php?erro');
    endif;
endif;
?>