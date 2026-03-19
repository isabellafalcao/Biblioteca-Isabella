<?php
// conexao.php

$host     = 'localhost';
$dbname   = 'livros_turma';
$usuario  = 'root';           // ← MUDE SE NECESSÁRIO
$senha    = '';               // ← MUDE SE NECESSÁRIO (em produção NUNCA deixe vazio!)

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    die("Erro de conexão com o banco de dados: " . htmlspecialchars($e->getMessage()));
}