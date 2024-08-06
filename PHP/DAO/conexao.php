<?php
    namespace PHP\Modelo\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','vendasLivros');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";

            }catch(Except $erro){
                return $erro;
            }
        }//fim do método
    }//Fim do classe
?>