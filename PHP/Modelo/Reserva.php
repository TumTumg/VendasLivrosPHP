<?php
namespace PHP\Modelo;

class Reserva {
    protected string $produto;
    protected string $email;
    protected int $quantidade;
    protected string $dataReserva;

    public function __construct(string $produto, string $email, int $quantidade, string $dataReserva) {
        $this->produto = $produto;
        $this->email = $email;
        $this->quantidade = $quantidade;
        $this->dataReserva = $dataReserva;
    }

    public function __get(string $campo) {
        return $this->$campo;
    }

    public function __set(string $campo, string $valor) {
        $this->$campo = $valor;
    }

    public function imprimir(): string {
        return "<br>Produto: " . $this->produto .
               "<br>E-mail: " . $this->email .
               "<br>Quantidade: " . $this->quantidade .
               "<br>Data de Reserva: " . $this->dataReserva;
    }
}
?>
