<?php
namespace PHP\Modelo;

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit;
}

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

// Conexão
$conexao = new Conexao();
$inserir = new Inserir();
$consultar = new Consultar();
$atualizar = new Atualizar();
$excluir = new Excluir();

// Inserir Livros e Mangás
echo $inserir->cadastrarLivro($conexao, 'Demon Slayer Vol 1', 2024, 'Autor Desconhecido', '26.00', 'Português', 50);
echo $inserir->cadastrarLivro($conexao, 'Berserk Vol 1', 2024, 'Autor Desconhecido', '34.00', 'Português', 50);
echo $inserir->cadastrarLivro($conexao, 'Death Note Vol 1', 2024, 'Autor Desconhecido', '70.00', 'Português', 50);
echo $inserir->cadastrarLivro($conexao, 'Percy Jackson', 2024, 'Rick Riordan', '71.00', 'Português', 50);
echo $inserir->cadastrarLivro($conexao, 'Diário De Um Banana', 2024, 'Jeff Kinney', '59.00', 'Português', 50);

// Consultar Livros Inseridos
$livros = [
    'Demon Slayer Vol 1',
    'Berserk Vol 1',
    'Death Note Vol 1',
    'Percy Jackson',
    'Diário De Um Banana'
];

foreach ($livros as $livro) {
    $result = $consultar->consultarLivro($conexao, $livro);
    print_r($result);
}
?>
