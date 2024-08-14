<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");  // Se o usuário não está logado, redireciona para o login
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Nexus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container">
        <h1 class="mt-5">Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
        <p class="lead">Você está logado no sistema.</p>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </div>
</body>
</html>
