<?php
session_start();
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>

<body>
    <h1>Editar Produto</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $selecionar = "SELECT * FROM AGR_PRODUTO WHERE PRO_ID=$id";


    $editar = $conectar->prepare($selecionar);
    $editar->execute();
    $row = $editar->fetch(PDO::FETCH_ASSOC);

    ?>
    <form enctype="multipart/form-data"method="POST" action="editar.php">
        <input type="hidden" name="id" value="<?php if (isset($row['PRO_ID'])) {
            echo $row['PRO_ID'];
        } ?>">

        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome do Produto" value="<?php if (isset($row['PRO_NOME'])) {
            echo $row['PRO_NOME'];
        } ?>"><br><br>

        <label>Descrição: </label>
        <input type="text" name="descricao" placeholder="Descrição do Produto" value="<?php if (isset($row['PRO_DESCRICAO'])) {
            echo $row['PRO_DESCRICAO'];
        } ?>"><br><br>

        <label>Preço: </label>
        <input type="textarea" name="preco" placeholder="Preço do Produto" value="<?php if (isset($row['PRO_PRECO'])) {
            echo $row['PRO_PRECO'];
        } ?>"><br><br>



        <input name="editar" type="submit" value="Editar">
    </form>
</body>

</html>