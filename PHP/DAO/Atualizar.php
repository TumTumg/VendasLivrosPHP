<?php
namespace PHP\Modelo\DAO;

class Atualizar {
    public function atualizarLivro(Conexao $conexao, string $campo, string $valor, string $titulo) {
        try {
            $conn = $conexao->conectar();
            if ($conn === null) {
                throw new Exception("Erro na conexão com o banco de dados.");
            }

            $sql = "UPDATE livro SET $campo = '$valor' WHERE titulo = '$titulo'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                throw new Exception("Erro ao executar a query: " . mysqli_error($conn));
            }

            mysqli_close($conn);
            return "<br>Livro atualizado com sucesso!";
        } catch (Exception $erro) {
            return "<br>Falha ao atualizar livro: " . $erro->getMessage();
        }
    }
}
?>
