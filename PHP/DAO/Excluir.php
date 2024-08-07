<?php
namespace PHP\Modelo\DAO;

require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Excluir {
    public function excluirCompra(Conexao $conexao, int $id) {
        try {
            $conn = $conexao->conectar();
            $sql = "DELETE FROM compra WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Compra excluída com sucesso!" : "<br>Falha ao excluir compra!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

    public function excluirLivro(Conexao $conexao, int $id) {
        try {
            $conn = $conexao->conectar();
            $sql = "DELETE FROM livro WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Livro excluído com sucesso!" : "<br>Falha ao excluir livro!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }
}
?>
