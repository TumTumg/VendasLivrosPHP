<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home - Nexus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <h1 class="mt-5">Página Inicial</h1>

        <?php if (isset($_GET['login_success']) && $_GET['login_success'] == 'true'): ?>
            <div class="alert alert-success text-center">
                Você está logado como <?php echo htmlspecialchars($_SESSION['username']); ?>!
            </div>
        <?php endif; ?>

        <p>Bem-vindo ao sistema Nexus.</p>

        <?php if (isset($_SESSION['username'])): ?>
            <a href="../DAO/dashboard.php" class="btn btn-primary">Ir para o Dashboard</a>
            <a href="../DAO/logout.php" class="btn btn-danger">Sair</a>
            <a href="../../HTML/index.html" class="btn btn-secondary">Página Inicial</a>
        <?php else: ?>
            <a href="../PHP/login.php" class="btn btn-primary">Login</a>
        <?php endif; ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
