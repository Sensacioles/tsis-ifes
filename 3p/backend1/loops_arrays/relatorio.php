<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar pelo código</title>
    <link rel="stylesheet" href="relatorio.css">
</head>
<body>
    <h2>Resultado Relatório de Clientes:</h2>
    <?php
        $pessoa1 = array("codigo"=>"1","nome"=>"Alberto Silva");
        $pessoa2 = array("codigo"=>"2","nome"=>"Bianca Duarte");
        $pessoa3 = array("codigo"=>"3","nome"=>"João Almeida");
        $pessoa4 = array("codigo"=>"4","nome"=>"Valéria Souza");
        $pessoa5 = array("codigo"=>"5","nome"=>"Augusto Silva");
        $lista = array($pessoa1,$pessoa2,$pessoa3,$pessoa4,$pessoa5);
    ?>
    <table id="Tabela">
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
    <?php foreach($lista as $itempessoa=>$valorpessoa){?>
        <tr>
        <?php foreach($valorpessoa as $item=>$valor){
            echo "<td>".$valor."</td>";
        }?>
        </tr>
    <?php }?>
    </table>
</body>
</html>