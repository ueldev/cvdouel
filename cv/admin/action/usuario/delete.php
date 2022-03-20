<?php 
    //curriculo.sobre
    require_once("../conn.php");
    extract($_GET);

    $sql = "DELETE FROM curriculo.cu_usuario
    WHERE usu_id_usuario=$id"; //
    //exit();

    //tratamento de erro com try catch!
    try {

        $connect = conection_open(); 
        $connect->query($sql);  
        conection_close();  

    }catch(Exception $e) {
        header('Location: ../../usuario.php?error=Exceção capturada E0002: SQL Syntax DELETE');
    }    
        header('Location: ../../usuario.php?error=Exceção Usuário removido com sucesso!');
?>

