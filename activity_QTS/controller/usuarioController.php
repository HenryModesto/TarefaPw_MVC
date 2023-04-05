<?php
    require_once('../model/usuario.php');

    $usuario = new Usuario($_GET['nome'], $_GET['cpf'], $_GET['renda']);

    header("Location: ../view/retornar.php?".
        "nome=".$usuario->getNome().
        "&cpf=".$usuario->getCpf().
        "&renda=".$usuario->getRenda().
        "&aliquota=".$usuario->getAliquota().
        "&imposto=".$usuario->getImposto()
    );
?>