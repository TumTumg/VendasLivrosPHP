<?php
namespace PHP\Modelo\DAO;

require_once('conexao.php');
use PHP\Modelo\DAO\Conexao;

class Inserir {
    public function cadastrarLivro(Conexao $conexao, string $titulo, int $ano, string $autor, string $preco, string $idioma, int $estoque) {
        try {
            $conn = $conexao->conectar();
            if ($conn === null) {
                throw new \Exception("Erro na conexão com o banco de dados.");
            }

            // Verifica se o livro já existe
            $checkSql = "SELECT * FROM livro WHERE tituloLivro = '$titulo'";
            $checkResult = mysqli_query($conn, $checkSql);

            if (mysqli_num_rows($checkResult) > 0) {
                throw new \Exception("Livro já cadastrado no banco de dados.");
            }

            $sql = "INSERT INTO livro (tituloLivro, anoLivro, autor, preco, idioma, estoque) 
                    VALUES ('$titulo', '$ano', '$autor', '$preco', '$idioma', '$estoque')";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                throw new \Exception("Erro ao executar a query: " . mysqli_error($conn));
            }

            mysqli_close($conn);
            return "<br>Livro cadastrado com sucesso!";
        } catch (\Exception $erro) {
            return "<br>Falha ao cadastrar livro: " . $erro->getMessage();
        }
    }
}
?>
