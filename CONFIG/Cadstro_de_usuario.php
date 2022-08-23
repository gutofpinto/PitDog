<?php
    // importando conexao com banco de dados
    include("Conexao.php");
    $nome = filter_input(INPUT_POST, 'nome_cadastro');
    $cpf = filter_input(INPUT_POST, 'cpf_cadastro');
    $senha = filter_input(INPUT_POST, 'senha_cadastro');
    $nivelAcesso = 0;
    
    $conn = getConet();
    $sql = 'INSERT INTO usuarios (usuario, cpf, senha, nivelAcesso) VALUES(?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $cpf);
    $stmt->bindValue(3, $senha);
    $stmt->bindValue(4, $nivelAcesso);

    if($stmt->execute()){
        header("location: ../index.php?home=logado");
    }else{
        header("location: ../VIEW/Cadastro.php?cadastro=erro");
    }  
?>