<?php

    

    $sql = "SELECT * FROM curriculo.cu_usuario";

    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $result = $connect->query($sql);  
        conection_close();  
        //var_dump($result);
    } catch (Exception $e) {
        header('Location: ../../usuario.php?error=Exceção capturada E0003: Erro ao consultar usuário. '); $e->getMessage();//ELE IRÁ EXECUTAR ISSO!
    }   

?>