<?php
    $sql = "SELECT * FROM curriculo.sobre WHERE id=1";

    try {
        $connect = conection_open(); //se gerar uma exceção no try... 
        $result = $connect->query($sql);  
        conection_close();
        //var_dump($result);  
    } catch (Exception $e) {
        
    }   

?>