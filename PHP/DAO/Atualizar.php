<?php
namespace PHP\Modelo\DAO;

require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Atualizar {
    public function atualizarCompra(Conexao $conexao, string $campo, string $novoDado, int $id) {
        try {
            $conn = $conexao->conectar();
            $sql = "UPDATE compra SET $campo = '$novoDado' WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Compra atualizada com sucesso!" : "<br>Falha ao atualizar compra!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

    public function atualizarLivro(Conexao $conexao, string $campo, string $novoDado, int $id) {
        try {
            $conn = $conexao->conectar();
            $sql = "UPDATE livro SET $campo = '$novoDado' WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Livro atualizado com sucesso!" : "<br>Falha ao atualizar livro!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }
}
?>
