<?php
require 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $quantidade = $_POST['quantidade'] ?? 0;
    $preco = $_POST['preco'] ?? 0;

    if (!filter_var($preco, FILTER_VALIDATE_FLOAT)) {
        echo "<p>Preço inválido</p>";
    } else {
        // Simulando adição do produto (em produção, seria inserido em um banco de dados)
        $novoProduto = ['nome' => $nome, 'quantidade' => $quantidade, 'preco' => $preco];
        // Redireciona para consulta com o novo produto adicionado (por exemplo, usando sessão ou banco)
        header('Location: consultar.php');
        exit();
    }
}
?>
<form method="post">
    <input type="text" name="nome" placeholder="Nome do Produto" required>
    <input type="number" name="quantidade" placeholder="Quantidade" required>
    <input type="text" name="preco" placeholder="Preço" required>
    <button class="botao-personalizado" type="submit">Cadastrar</button>
</form>
<?php
require 'footer.php';
?>

