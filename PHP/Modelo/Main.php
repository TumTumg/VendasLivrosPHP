<?php
    namespace PHP\Modelo;

    require_once('Usuario.php');

    $usuario1 = new Usuario('Vitor','Rua Palestra Italia','11988686684','07/08/2006','vitor','sla');

    echo $usuario1->imprimir();



?>