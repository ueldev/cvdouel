<?php

    $sql = "SELECT * FROM curriculo.cu_usuario WHERE usu_id_usuario=$id";

    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $result = $connect->query($sql);  
        conection_close();  
    } catch (Exception $e) {
        
    }   

?>