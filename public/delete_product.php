<?php
require_once '../db/connection.php';

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Prepare the SQL statement to delete the product
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);

    if ($stmt->execute()) {
        echo "Produto excluído com sucesso.";
    } else {
        echo "Erro ao excluir o produto: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID do produto não fornecido.";
}

$conn->close();
?>