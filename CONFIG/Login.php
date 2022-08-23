<?php
    include("Conexao.php");

    $nome = filter_input(INPUT_POST, 'usuario_login');
    $senha = filter_input(INPUT_POST, 'senha_login');
    print("usuario ".$nome." e senha ".$senha);
?>