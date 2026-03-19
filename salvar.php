<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor  = trim($_POST['autor']  ?? '');
    $aluno  = trim($_POST['aluno']  ?? '');
    $status = $_POST['status']      ?? '';

    if ($titulo === '' || $autor === '' || $aluno === '' || !in_array($status, ['Lendo', 'Lido'])) {
        die("Preencha todos os campos corretamente.");
    }

    try {
        $stmt = $pdo->prepare("
            INSERT INTO livros (titulo, autor, aluno, status)
            VALUES (:titulo, :autor, :aluno, :status)
        ");
        $stmt->execute([
            'titulo' => $titulo,
            'autor'  => $autor,
            'aluno'  => $aluno,
            'status' => $status
        ]);

        header("Location: index.php?sucesso=1");
        exit;
    } catch (PDOException $e) {
        die("Erro ao cadastrar: " . $e->getMessage());
    }
}

header("Location: index.php");
exit;