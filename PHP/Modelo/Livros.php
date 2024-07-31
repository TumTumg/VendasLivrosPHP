<?php
namespace PHP\Modelo;

class Livro {
    // Variáveis
    protected string $tituloLivro;
    protected int $anoLivro;
    protected string $autor;
    protected string $preco;
    protected string $idioma;
    protected int $estoque;

    // Método Construtor
    public function __construct(string $tituloLivro, int $anoLivro, string $autor, string $preco, string $idioma, int $estoque) {
        $this->tituloLivro = $tituloLivro;
        $this->anoLivro = $anoLivro;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->idioma = $idioma;
        $this->estoque = $estoque;
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
        return "<br>Título do Livro: " . $this->tituloLivro .
               "<br>Ano do Livro: " . $this->anoLivro .
               "<br>Autor: " . $this->autor .
               "<br>Preço: " . $this->preco .
               "<br>Idioma: " . $this->idioma .
               "<br>Estoque: " . $this->estoque;
    }
}
?>
