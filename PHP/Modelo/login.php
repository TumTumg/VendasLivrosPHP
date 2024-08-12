<?php
namespace PHP\Modelo;

require_once('../DAO/conexao.php');

use PHP\Modelo\DAO\Conexao;

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexão com o banco de dados
    $conexao = new Conexao();
    $pdo = $conexao->getConexao();

    // Obtém os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Verifica se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
        // Usuário encontrado - Salva as informações na sessão e redireciona
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Usuário não encontrado - Exibe mensagem de erro
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.html';</script>";
    }
} else {
    // Se o formulário não foi enviado, redireciona para a página de login
    header('Location: login.html');
    exit;
}
?>
