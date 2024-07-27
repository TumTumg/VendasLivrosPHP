<?php
    namespace PHP\Modelo;

    //
    class Usuario{
        //Variaveis
        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $dataNasc;
        protected string $login;
        protected string $senha;

        //Metodo Construtor
        public function __construct(string $nome, string $endereco,string $telefone, string $dataNasc, string $login, string $senha){
            $this->nome =$nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataNasc =$dataNasc;
            $this->login = $login;
            $this->senha = $senha;

        }//fim do construtor

        public function __get(string $nome){
            return $this->nome;
        }

        public function __set(string $campo,string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Nome: ".$this->nome.
                    "<br>Endereço: ".$this->endereco.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Data de Nascimento: ".$this->dataNasc.
                    "<br>Login: ".$this->login.
                    "<br>Senha: ".$this->senha;
                    
        }//fim do metodo imprimir
        
    }//fim da classe


?>