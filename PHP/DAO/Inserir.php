<?php
namespace PHP\Modelo\DAO;

require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Inserir {
    public function cadastrarCompra(Conexao $conexao, string $numeroCartao, string $nomeCartao, string $validade, string $codigo, int $quantidade) {
        try {
            $conn = $conexao->conectar();
            $sql = "INSERT INTO compra (numeroCartao, nomeCartao, validade, codigo, quantidade) 
                    VALUES ('$numeroCartao', '$nomeCartao', '$validade', '$codigo', '$quantidade')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Compra cadastrada com sucesso!" : "<br>Falha ao cadastrar compra!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

    public function cadastrarLivro(Conexao $conexao, string $titulo, int $ano, string $autor, string $preco, string $idioma, int $estoque) {
        try {
            $conn = $conexao->conectar();
            $sql = "INSERT INTO livro (titulo, ano, autor, preco, idioma, estoque) 
                    VALUES ('$titulo', '$ano', '$autor', '$preco', '$idioma', '$estoque')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result ? "<br>Livro cadastrado com sucesso!" : "<br>Falha ao cadastrar livro!";
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }
}
?>
