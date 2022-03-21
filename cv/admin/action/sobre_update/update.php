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
    skill1 = '$skill1',
    skill2 = '$skill2',
    skill3 = '$skill3',
    skill4 = '$skill4',
    skill5 = '$skill5',
    skill6 = '$skill6',
    nivel1 = '$nivel1',
    nivel2 = '$nivel2',
    nivel3 = '$nivel3',
    nivel4 = '$nivel4',
    nivel5 = '$nivel5',
    nivel6 = '$nivel6',
    linkedin = '$linkedin',
    instagram = '$instagram',
    youtube = '$youtube',
    github = '$github',
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