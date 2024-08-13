<?php
namespace PHP\Modelo\DAO;

class Conexao {
    public function conectar() {
        $host = 'localhost'; // ou o IP do servidor de banco de dados
        $usuario = 'root'; // ou o nome de usuário do banco de dados
        $senha = ''; // ou a senha do banco de dados
        $banco = 'VendaLivrosDB'; // Nome correto do banco de dados

        $conn = mysqli_connect($host, $usuario, $senha, $banco);

        if (!$conn) {
            die('Conexão falhou: ' . mysqli_connect_error());
        }

        return $conn;
    }
}
?>
