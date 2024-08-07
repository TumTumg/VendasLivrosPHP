<?php
namespace PHP\Modelo;

class Compra {
    protected string $numeroCartao;
    protected string $nomeCartao;
    protected string $validade;
    protected string $codigo;
    protected int $quantidade;

    public function __construct(string $numeroCartao, string $nomeCartao, string $validade, string $codigo, int $quantidade) {
        $this->numeroCartao = $numeroCartao;
        $this->nomeCartao = $nomeCartao;
        $this->validade = $validade;
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
    }

    public function __get(string $campo) {
        return $this->$campo;
    }

    public function __set(string $campo, string $valor) {
        $this->$campo = $valor;
    }

    public function imprimir(): string {
        return "<br>Número do Cartão: " . $this->numeroCartao .
               "<br>Nome do Titular do Cartão: " . $this->nomeCartao .
               "<br>Validade: " . $this->validade .
               "<br>Código CVV: " . $this->codigo .
               "<br>Quantidade: " . $this->quantidade;
    }
}
?>
