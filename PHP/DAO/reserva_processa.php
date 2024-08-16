<?php
require_once 'conexao.php';
require_once '../Modelo/Reserva.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'];
    $email = $_POST['email'];
    $quantidade = $_POST['quantidade'];
    $dataReserva = $_POST['dataReserva'];

    $reserva = new \PHP\Modelo\Reserva($produto, $email, $quantidade, $dataReserva);
    
    if ($reserva->salvar()) {
        echo 'Reserva realizada com sucesso!';
    } else {
        echo 'Falha ao realizar a reserva.';
    }
}
?>
