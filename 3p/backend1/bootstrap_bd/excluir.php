<?php 
    require_once 'banco.php';

    if(isset($_GET['id'])):
        $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
        $sql="DELETE FROM produto WHERE id=$id";
        if(mysqli_query($connect,$sql)):
            header('Location: consultar.php?excluir=ok');
        else:
            header('Location: consultar.php?excluir=erro');
        endif;
    endif;
?>