<?php
    namespace PHP\Modelo;

    class Compra{
        //Variáveis
        protected string $numeroCartao;
        protected string $nomeCartao;
        protected string $validade;
        protected string $codigo;
    
        
        //Método Construtor
        public function __construct(string $numeroCartao, string $nomeCartao, string $validade, string $codigo)
        {
            $this->numeroCartao = $numeroCartao;
            $this->nomeCartao = $nomeCartao;
            $this->validade = $validade;
            $this->codigo = $codigo;
        }//fim do construtor

        public function __get(string $nome){
            return $nome;
        }//fim do get 

        public function __set(string $campo, string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string 
        {
            return "<br>Número do Cartão: ".$this->numeroCartao.
                    "<br>Nome do Titular do Cartão: ".$this->nomeCartao.
                    "<br>Validade: ".$this->validade.
                    "<br>Código CVV: ".$this->codigo;
        }// fim do imprimir
    }//fim da classe
?>