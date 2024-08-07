<?php
namespace PHP\Modelo;

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

// Inserir Livro
echo $inserir->cadastrarLivro($conexao, 'PHP Programming', 2024, 'John Doe', '100.00', 'Português', 50);

// Consultar Livro
$livro = $consultar->consultarLivro($conexao, 'PHP Programming');
print_r($livro);

// Atualizar Livro
echo $atualizar->atualizarLivro($conexao, 'preco', '120.00', 'PHP Programming');

// Excluir Livro
echo $excluir->excluirLivro($conexao, 'PHP Programming');

// Consultar Todas as Compras
$compras = $consultar->consultarTodasCompras($conexao);
foreach ($compras as $compra) {
    print_r($compra);
}
?>
