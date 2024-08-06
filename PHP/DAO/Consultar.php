<?php
namespace PHP\Modelo\DAO;

require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Consultar {
    public function consultarCompras(Conexao $conexao) {
        try {
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM compra";
            $result = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_Array($result)) {
                echo "<br>Número do Cartão: " . $dados["numeroCartao"] .
                     "<br>Nome do Titular do Cartão: " . $dados["nomeCartao"] .
                     "<br>Validade: " . $dados["validade"] .
                     "<br>Código CVV: " . $dados["codigo"] .
                     "<br>Quantidade: " . $dados["quantidade"];
            }
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }

    public function consultarLivros(Conexao $conexao) {
        try {
            $conn = $conexao->conectar();
            $sql = "SELECT * FROM livro";
            $result = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_Array($result)) {
                echo "<br>Título do Livro: " . $dados["titulo"] .
                     "<br>Ano do Livro: " . $dados["ano"] .
                     "<br>Autor: " . $dados["autor"] .
                     "<br>Preço: " . $dados["preco"] .
                     "<br>Idioma: " . $dados["idioma"] .
                     "<br>Estoque: " . $dados["estoque"];
            }
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }
}
?>
