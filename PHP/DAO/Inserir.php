<?php
    namespace PHP\Modelo\DAO;

    require_once('../DAO/conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function 
        cadastrarCompra(Conexao $conexao,
                        string $numeroCartao,
                        string $nomeCartao,
                        string $validade,
                        string $codigo,
                        int $quantidade){
                           try{
                            $conn = $conexao->conectar();
                            $sql = "insert into compra (numeroCartao, nomeCartao,validade,codigo, quantidade) values ('$numeroCartao')"
                           } 
                        }
    }




?>