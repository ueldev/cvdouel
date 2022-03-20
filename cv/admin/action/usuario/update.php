<?php

    //var_dump($_POST);
    //once significa q vou precisar apenas uma vez
    extract($_POST);
    require_once("../conn.php");

    if ($status == 'on') {
        $status = 1;
    }else{
        $status = 0;
    }
    
    $sql = "UPDATE curriculo.cu_usuario
    SET
    usu_nome = '$nome',
    usu_email = '$email',
    usu_senha = md5('$senha'),
    usu_login = '$login',
    usu_status = $status
    WHERE usu_id_usuario = $id;"; 
    
    // exit(var_dump($sql));

    //tratamento de erro com try catch!
    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $connect->query($sql);  
        conection_close();  
    }catch(Exception $e) {
        header('Location: ../../usuario.php?error=Exceção capturada E0004: SQL Syntax ');//ELE IRÁ EXECUTAR ISSO!
    }    
    
    header('Location: ../../usuario.php?success=Usuario Atualizado com sucesso');

    $connect = conection_open();
    $connect->query($sql);
    conection_close();

?>