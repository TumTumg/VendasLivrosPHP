<?php
    namespace PHP\Modelo;

    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Compra.php');
    require_once('Reserva.php');

    $usuario1 = new Usuario('Vitor','Rua Palestra Italia','11988686684','07/08/2006','vitor','sla');
    $usuario2 = new Usuario('Carlos','Rua Italia','119887444','18/02/1982','carlos','123');
    

    echo $usuario1->imprimir();
    echo "<br>";
    echo $usuario2->imprimir();
    echo "<br><br>";

    $livro1 = new Livro('Cabeça Fria, Coração Quente','2022','Abel Ferreira','60,00','Português','10');
    $livro2 = new Livro('Elon Musk','2023','Walter Isaacson','70,00','Inglês','3');

    echo $livro1->imprimir();
    echo"<br>";
    echo $livro2->imprimir();
    echo"<br>";

    $Compra1 = new Compra('414646848686846','Fred','02/27','544');
    $Compra2 = new Compra('46324684751476','Luiza','03/43','576');

    echo $Compra1->imprimir();
    echo "<br>";
    echo $Compra2->imprimir();
    echo "<br>";
    
    $Reserva1 = new Reserva('Cabeça Fria, Coração Quente','pedrolopes@gmail.com','1','25/08');
    $Reserva2 = new Reserva('Elon Musk','algumacoisa@gmail.com','3','29/07');

    echo $Reserva1->imprimir();
    echo "<br>";
    echo $Reserva2->imprimir();

?>