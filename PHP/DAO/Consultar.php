<?php
namespace PHP\Modelo\DAO;

require_once('conexao.php');
use PHP\Modelo\DAO\Conexao;

class Consultar {
    public function ConsultarTudo(Conexao $conexao, string $tabela) {
        try {
            $conn = $conexao->conectar();
            if ($conn === null) {
                throw new \Exception("Erro na conexão com o banco de dados.");
            }

            $sql = "SELECT * FROM $tabela";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                throw new \Exception("Erro ao executar a query: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    echo "$key: $value<br>";
                }
                echo "<br>";
            }

            mysqli_close($conn);
        } catch (\Exception $erro) {
            echo "<br>Erro ao consultar dados: " . $erro->getMessage();
        }
    }
}
?>
