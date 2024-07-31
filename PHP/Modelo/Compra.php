<?php
namespace PHP\Modelo;

class Compra {
    // Variáveis
    protected string $numeroCartao;
    protected string $nomeCartao;
    protected string $validade;
    protected string $codigo;

    // Método Construtor
    public function __construct(string $numeroCartao, string $nomeCartao, string $validade, string $codigo) {
        $this->numeroCartao = $numeroCartao;
        $this->nomeCartao = $nomeCartao;
        $this->validade = $validade;
        $this->codigo = $codigo;
    }

    // Métodos Get e Set
    public function __get(string $campo) {
        return $this->$campo;
    }

    public function __set(string $campo, string $valor) {
        $this->$campo = $valor;
    }

    // Método imprimir
    public function imprimir(): string {
        return "<br>Número do Cartão: " . $this->numeroCartao .
               "<br>Nome do Titular do Cartão: " . $this->nomeCartao .
               "<br>Validade: " . $this->validade .
               "<br>Código CVV: " . $this->codigo;
    }
}
?>
