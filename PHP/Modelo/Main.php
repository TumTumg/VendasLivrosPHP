<?php
namespace PHP\Modelo;

require_once('Compra.php');
require_once('Livros.php');
require_once('Reserva.php');
require_once('Usuario.php');
require_once('../DAO/conexao.php');
require_once('../DAO/Inserir.php');
require_once('../DAO/Consultar.php');
require_once('../DAO/Atualizar.php');
require_once('../DAO/Excluir.php');

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Inserir;
use PHP\Modelo\DAO\Consultar;
use PHP\Modelo\DAO\Atualizar;
use PHP\Modelo\DAO\Excluir;

// Conexão com o banco de dados
$conexao = new Conexao();
$inserir = new Inserir();
$consultar = new Consultar();
$atualizar = new Atualizar();
$excluir = new Excluir();

// Inserir Livros e Mangás
$livros = [
    ['Demon Slayer Vol 1', 2024, 'Autor Desconhecido', '26.00', 'Português', 50],
    ['Berserk Vol 1', 2024, 'Autor Desconhecido', '34.00', 'Português', 50],
    ['Death Note Vol 1', 2024, 'Autor Desconhecido', '70.00', 'Português', 50],
    ['Percy Jackson', 2024, 'Rick Riordan', '71.00', 'Português', 50],
    ['Diário De Um Banana', 2024, 'Jeff Kinney', '59.00', 'Português', 50],
];

foreach ($livros as $livro) {
    echo $inserir->cadastrarLivro($conexao, ...$livro);
}

// Consultar todos os livros
echo "<br><br>Livros cadastrados:<br>";
$consultar->ConsultarTudo($conexao, 'livro');

// Excluir um livro específico (exemplo usando o título "Diário De Um Banana")
echo "<br><br>Excluindo livro 'Diário De Um Banana':<br>";
echo $excluir->excluirLivro($conexao, 'Diário De Um Banana');

// Atualizar um livro específico (exemplo atualizando o preço de "Percy Jackson")
echo "<br><br>Atualizando preço do livro 'Percy Jackson':<br>";
echo $atualizar->atualizarLivro($conexao, 'preco', '80.00', 'Percy Jackson');

?>
