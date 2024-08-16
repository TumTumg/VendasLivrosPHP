<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['cardholder'];
    $dataValidade = $_POST['date'];
    $cvv = $_POST['verification'];
    $numeroCartao = $_POST['cardnumber'];
    $metodoPagamento = $_POST['payment'];

    $mensagem = "Compra realizada com sucesso! Nome: $nome, Método de Pagamento: $metodoPagamento";
    header("Location: confirmacao.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Finalização de Compra - Nexus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../CSS/style2.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="part card-details">
                <h1 class="title">Finalização de Compra</h1><br><br>

                <form action="checkout.php" method="post">
                    <div class="group payment-method">
                        <label for="card" class="method card">
                            <div class="card-logos">
                                <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
                                <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
                            </div>

                            <div class="radio-input">
                                <input id="card" type="radio" name="payment" value="card" required>
                                Pagar com cartão de crédito
                            </div>
                        </label>

                        <label for="paypal" class="method paypal">
                            <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
                            <div class="radio-input">
                                <input id="paypal" type="radio" name="payment" value="paypal" required>
                                Pagar com PayPal
                            </div>
                        </label>
                    </div>

                    <div class="input-fields">
                        <div class="column-1">
                            <div class="group">
                                <label for="cardholder">Nome no Cartão</label>
                                <input type="text" id="cardholder" name="cardholder" required />
                            </div>

                            <div class="small-inputs">
                                <div class="group">
                                    <label for="date">Data de Validade</label>
                                    <input type="text" id="date" name="date" required />
                                </div>

                                <div class="group">
                                    <label for="verification">Número do cartão</label>
                                    <input type="password" id="verification" name="verification" required />
                                </div>
                            </div>

                        </div>
                        <div class="column-2 group card-number">
                            <label for="cardnumber">CVV / CVC *</label>
                            <input type="password" id="cardnumber" name="cardnumber" required />

                            <span class="info">* CVV ou CVC é o código de segurança do cartão, três dígitos únicos na parte traseira do seu cartão.</span>
                        </div>
                    </div><br><br>

                    <div class="submit-group">
                        <button type="button" class="btn back-btn" onclick="history.back();">Voltar</button>
                        <button type="submit" class="btn next-btn">Finalizar Compra</button>
                    </div>
                </form>
            </div>

            <div class="part bg"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
