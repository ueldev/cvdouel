
<?php

    $host = "127.0.0.1";
    $username = "root";
    $password = "" ;
    $dbname = "curriculo";
    $con = NULL;
    //Esse problema pode acontecer se tiver com problemas no banco de dados
    //Podes usar para executações de erros!
    //ESTUDAR TRY CATCH SAMUEL!!!!!!!!!
    function conection_open(){
        try{
            global $host, $username, $password, $dbname, $con;
            $con = new mysqli($host, $username, $password, $dbname);
            return $con;
        }catch (Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
    }

     function conection_close(){
        global $con;
        $con->close(); 
        

     }


    

?>