<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Reserva</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/styleReservaForm.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Adicionar Reserva</h1>
        <form action="../DAO/reserva_processa.php" method="post">
            <div class="form-group">
                <label for="produto">Produto:</label>
                <input type="text" class="form-control" id="produto" name="produto" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>
            <div class="form-group">
                <label for="dataReserva">Data da Reserva:</label>
                <input type="date" class="form-control" id="dataReserva" name="dataReserva" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Reservar</button><br><br>

            <div class="text-center mt-3">
                <a href="../../HTML/index.html" class="btn-back">Voltar à Página Inicial</a>
            </div>

        </form>
    </div>
</body>
</html>
