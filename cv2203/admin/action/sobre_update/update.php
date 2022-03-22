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
    ano_inicio1 = '$ano_inicio1',
    ano_inicio2 = '$ano_inicio2',
    ano_inicio3 = '$ano_inicio3',
    ano_termino3 = '$ano_termino3',
    ano_termino2 = '$ano_termino2',
    ano_termino1 = '$ano_termino1',
    nome_experiencia1 = '$nome_experiencia1',
    nome_experiencia2 = '$nome_experiencia2',
    nome_experiencia3 = '$nome_experiencia3',
    nome_empresa1 = '$nome_empresa1',
    nome_empresa2 = '$nome_empresa2',
    nome_empresa3 = '$nome_empresa3',
    funcao1 = '$funcao1',
    funcao2 = '$funcao2',
    funcao3 = '$funcao3',
    edu_inicio1 = '$edu_inicio1',
    edu_inicio2 = '$edu_inicio2',
    edu_inicio3 = '$edu_inicio3',
    edu_fim3 = '$edu_fim3',
    edu_fim2 = '$edu_fim2',
    edu_fim1 = '$edu_fim1',
    edu_curso1 = '$edu_curso1',
    edu_curso2 = '$edu_curso2',
    edu_curso3 = '$edu_curso3',
    edu_institu1 = '$edu_institu1',
    edu_institu2 = '$edu_institu2',
    edu_institu3 = '$edu_institu3',
    edu_experi1 = '$edu_experi1',
    edu_experi2 = '$edu_experi2',
    edu_experi3 = '$edu_experi3',
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