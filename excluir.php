<?php
require_once 'conexao.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);

        header("Location: index.php?excluido=1");
        exit;
    } catch (PDOException $e) {
        die("Erro ao excluir: " . $e->getMessage());
    }
}

header("Location: index.php");
exit;