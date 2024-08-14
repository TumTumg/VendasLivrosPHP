<?php
namespace PHP\Modelo\DAO;

class Conexao {
    public function conectar() {
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'VendaLivrosDB';

        $conn = new \mysqli($host, $usuario, $senha, $banco);

        if ($conn->connect_error) {
            die('Conexão falhou: ' . $conn->connect_error);
        }

        return $conn;
    }
}
?>
