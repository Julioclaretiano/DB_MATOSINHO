<?php
session_start();
include '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productDescription = $_POST['product_description'];

    $stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $productName, $productPrice, $productDescription);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Produto cadastrado com sucesso!";
        header("Location: view_products.php");
        exit();
    } else {
        $_SESSION['error'] = "Erro ao cadastrar o produto.";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Cadastrar Novo Produto</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='error'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);
        }
        ?>
        <form action="register_product.php" method="POST">
            <label for="product_name">Nome do Produto:</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="product_price">Preço do Produto:</label>
            <input type="number" id="product_price" name="product_price" step="0.01" required>

            <label for="product_description">Descrição do Produto:</label>
            <textarea id="product_description" name="product_description" required></textarea>

            <button type="submit">Cadastrar Produto</button>
        </form>
        <a href="view_products.php">Ver Produtos</a>
    </div>
</body>
</html>