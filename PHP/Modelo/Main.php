<?php
namespace PHP\Modelo;

require_once('../Modelo/Usuario.php');
require_once('../Modelo/Livros.php');
require_once('../Modelo/Compra.php');
require_once('../Modelo/Reserva.php');

// Criando usuários
$usuario1 = new Usuario('Vitor', 'Rua Palestra Italia', '11988686684', '07/08/2006', 'vitor', 'sla');
$usuario2 = new Usuario('Carlos', 'Rua Italia', '119887444', '18/02/1982', 'carlos', '123');

// Adicionando usuários
Usuario::adicionarUsuario($usuario1);
Usuario::adicionarUsuario($usuario2);

// Imprimindo todos os usuários
foreach (Usuario::obterUsuarios() as $usuario) {
    echo $usuario->imprimir();
    echo "<br><br>";
}

// Validando login
$loginValido = Usuario::validarLogin('vitor', 'sla');
echo $loginValido ? "Login válido para Vitor.<br>" : "Login inválido para Vitor.<br>";

$loginValido = Usuario::validarLogin('carlos', '123');
echo $loginValido ? "Login válido para Carlos.<br>" : "Login inválido para Carlos.<br>";

$loginValido = Usuario::validarLogin('joao', 'senha');
echo $loginValido ? "Login válido para João.<br>" : "Login inválido para João.<br>";

// Atualizando um usuário
Usuario::atualizarUsuario('vitor', ['endereco' => 'Nova Rua', 'telefone' => '11999999999']);

// Imprimindo usuário atualizado
echo $usuario1->imprimir();
echo "<br><br>";

// Deletando um usuário
Usuario::deletarUsuario('carlos');

// Tentando imprimir usuário deletado
$usuarioDeletado = Usuario::encontrarUsuarioPorLogin('carlos');
echo $usuarioDeletado ? $usuarioDeletado->imprimir() : "Usuário Carlos foi deletado.<br>";

// Criando livros
$livro1 = new Livro('Cabeça Fria, Coração Quente', 2022, 'Abel Ferreira', '60,00', 'Português', 10);
$livro2 = new Livro('Elon Musk', 2023, 'Walter Isaacson', '70,00', 'Inglês', 3);

// Imprimindo livros
echo $livro1->imprimir();
echo "<br>";
echo $livro2->imprimir();
echo "<br>";

// Criando compras
$compra1 = new Compra('414646848686846', 'Fred', '02/27', '544');
$compra2 = new Compra('46324684751476', 'Luiza', '03/43', '576');

// Imprimindo compras
echo $compra1->imprimir();
echo "<br>";
echo $compra2->imprimir();
echo "<br>";

// Criando reservas
$reserva1 = new Reserva('Cabeça Fria, Coração Quente', 'pedrolopes@gmail.com', 1, '25/08');
$reserva2 = new Reserva('Elon Musk', 'algumacoisa@gmail.com', 3, '29/07');

// Imprimindo reservas
echo $reserva1->imprimir();
echo "<br>";
echo $reserva2->imprimir();
echo "<br>";
?>
