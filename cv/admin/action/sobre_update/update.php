<?php

    //var_dump($_POST);
    //once significa q vou precisar apenas uma vez
    extract($_POST);
    require_once("../conn.php");
    
    //  var_dump($_POST);

    $sql = "UPDATE curriculo.sobre
    SET
    conteudo = '$conteudo',
    idade = '$idade',
    email = '$email',
    telefone = '$telefone',
    linguagem = '$linguagem',
    endereco = '$endereco',
    nome = '$nome'
    WHERE id = 1;"; 
    
    // exit(var_dump($sql));

    //tratamento de erro com try catch!
    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $connect->query($sql);  
        conection_close();  
    }catch(Exception $e) {
        header('Location: ../../about.php?error=Exceção capturada E0004: SQL Syntax ');//ELE IRÁ EXECUTAR ISSO!
    }    
    
    header('Location: ../../about.php?success=Usuario Atualizado com sucesso');

    $connect = conection_open();
    $connect->query($sql);
    conection_close();

?>