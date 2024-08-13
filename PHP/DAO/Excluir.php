<?php
namespace PHP\Modelo\DAO;

require_once('conexao.php');
use PHP\Modelo\DAO\Conexao;

class Excluir {
    public function excluirLivro(Conexao $conexao, string $tituloLivro) {
        try {
            $conn = $conexao->conectar();
            if ($conn === null) {
                throw new \Exception("Erro na conexão com o banco de dados.");
            }

            $sql = "DELETE FROM livro WHERE tituloLivro = '$tituloLivro'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                throw new \Exception("Erro ao executar a query: " . mysqli_error($conn));
            }

            mysqli_close($conn);
            return "<br>Livro excluído com sucesso!";
        } catch (\Exception $erro) {
            return "<br>Falha ao excluir livro: " . $erro->getMessage();
        }
    }
}
?>
