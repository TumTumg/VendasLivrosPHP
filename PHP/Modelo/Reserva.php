<?php
namespace PHP\Modelo;

// Inclua o arquivo de conexão
require_once('../DAO/conexao.php');

class Reserva {
    protected string $produto;
    protected string $email;
    protected int $quantidade;
    protected string $dataReserva;

    public function __construct(string $produto, string $email, int $quantidade, string $dataReserva) {
        $this->produto = $produto;
        $this->email = $email;
        $this->quantidade = $quantidade;
        $this->dataReserva = $dataReserva;
    }

    public function __get(string $campo) {
        return $this->$campo;
    }

    public function __set(string $campo, string $valor) {
        $this->$campo = $valor;
    }

    public function imprimir(): string {
        return "<br>Produto: " . $this->produto .
               "<br>E-mail: " . $this->email .
               "<br>Quantidade: " . $this->quantidade .
               "<br>Data de Reserva: " . $this->dataReserva;
    }

    public function salvar(): bool {
        global $pdo;  // Usa a variável global $pdo
        try {
            $sql = "INSERT INTO reserva (produto, email, quantidade, dataReserva) VALUES (:produto, :email, :quantidade, :dataReserva)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':produto', $this->produto);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->bindParam(':dataReserva', $this->dataReserva);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    public static function buscarPorEmail(string $email): array {
        global $pdo;  // Usa a variável global $pdo
        try {
            $sql = "SELECT * FROM reserva WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return [];
        }
    }
}
?>
