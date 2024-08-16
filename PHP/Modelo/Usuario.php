<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root"; // Substitua por seu usuário do banco de dados
$password = ""; // Substitua pela senha do banco de dados
$dbname = "VendaLivrosDB";

// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash da senha
    $dataNasc = $_POST['dataNasc'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    // Preparando a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (login, password, dataNasc, nome, endereco, telefone, reg_date) 
            VALUES (?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $login, $password, $dataNasc, $nome, $endereco, $telefone);

    // Executando a consulta e verificando se foi bem-sucedida
    if ($stmt->execute()) {
        // Redirecionando para a página inicial após o cadastro
        header("Location: ../index.html");
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    // Fechando a conexão
    $stmt->close();
}

$conn->close();
?>
