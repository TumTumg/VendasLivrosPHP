<?php
session_start(); // Inicia a sessão

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
    // Verifique se os dados estão sendo recebidos
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Debug: Exiba os dados recebidos
        // echo "Login recebido: " . htmlspecialchars($login) . "<br>";
        // echo "Password recebido: " . htmlspecialchars($password) . "<br>";

        // Preparando a consulta SQL para verificar as credenciais
        $sql = "SELECT id, password FROM usuarios WHERE login = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Erro ao preparar a consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $login);
        $stmt->execute();
        $stmt->store_result();

        // Verificando se o usuário existe
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            // Verificando a senha
            if (password_verify($password, $hashed_password)) {
                // Iniciando a sessão do usuário
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $login;

                // Redirecionando para a página inicial após o login
                header("Location: ../../HTML/indexLogado.html");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        // Fechando a conexão
        $stmt->close();
    } else {
        echo "Dados do formulário não recebidos.";
    }
}

$conn->close();
?>
