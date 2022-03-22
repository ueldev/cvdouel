<?php

    //var_dump($_POST);
    //once significa q vou8 precisar apenas uma vez
    extract($_POST);
    require_once("../conn.php");

    if ($status == 'on') {
        $status = 1;
    }else{
        $status = 0;
    }
    

    $sql = "INSERT INTO cu_usuario(usu_nome, usu_email, usu_senha, usu_login, usu_status) VALUES ('$nome','$email',md5('$senha'),'$login',$status)";
    //exit();

    //tratamento de erro com try catch!
    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $connect->query($sql);  
        conection_close();  
    }catch(Exception $e) {
       header('Location: ../../usuario.php?error=Exceção capturada E0004: SQL Syntax '); $e->getMessage();//ELE IRÁ EXECUTAR ISSO!
    }
        header('Location: ../../usuario.php?success=Usuario Inserido com sucesso!'); $e->getMessage(); 

?>