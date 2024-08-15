
<?php
session_start();
$mensagem = isset($_GET['mensagem']) ? urldecode($_GET['mensagem']) : "Compra concluída com sucesso!";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação - Nexus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mt-5">Confirmação de Compra</h1>
        <div class="alert alert-success text-center">
            <?php echo htmlspecialchars($mensagem); ?>
        </div>
        <a href="../../HTML/index.html" class="btn btn-secondary">Voltar para a Página Inicial</a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
