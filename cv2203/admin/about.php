<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/aaa.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/aaa.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Fernandoessorocaba</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Usuario
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="usuario.php" class="nav-link">
                  <i class="fas fa-solid fa-users nav-icon"></i>
                  <p>Lista de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="usuario_form.php" class="nav-link">
                  <i class="fas fa-solid fa-user-plus nav-icon"></i>
                  <p>Cadastrar Usuario</p>
                </a>
                <a href="http://localhost/cv/" class="nav-link">
                  <i class="fas fa-solid fa-user-plus nav-icon"></i>
                  <p>Curriculo</p>
                </a>
                <li class="nav-item">
                <a href="about.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sobre</p>
                </a>
              </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <?php
      if(isset($_GET['success'])){
    ?>
      <div class="alert alert-success alert-dismissible" >
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
        <?php echo($_GET['success']);
        ?>
      </div>
    <?php
      }
    ?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Novo Usuário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
      extract($_GET);
      require_once('action/conn.php');
      require_once('action/sobre_update/selectid.php');
      //exit(var_dump($result));
      $row = $result->fetch_assoc();
      //exit(var_dump($row));
      //var_dump($row);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            
              <div class="card-header">
                <h3 class="card-title">Resumo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="action/sobre_update/update.php" method="POST">
            
                <div class="card-body">
                    <textarea id="summernote" name="conteudo">
                      <?php echo($row['conteudo']); ?>
                    </textarea>

                  <h3>Informações</h3>  
                  
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nome</span> 
                  </div>
                  <input type="text" class="form-control" name="nome" value="<?php echo($row['nome']); ?>">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Idade</span> 
                  </div>
                  <input type="text" class="form-control" name="idade" value="<?php echo($row['idade']); ?>">
                </div>
                  
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" name="email" value="<?php echo($row['email']); ?>">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tel.</span>
                  </div>
                  <input type="text" class="form-control" name="telefone" value="<?php echo($row['telefone']); ?>">
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Ende.</span>
                  </div>
                  <input type="text" class="form-control" name="endereco" value="<?php echo($row['endereco']); ?>">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Lng.</span>
                  </div>
                  <input type="text" class="form-control" name="linguagem" value="<?php echo($row['linguagem']); ?>">
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            
                <!-- informações básicas -->
            
            <!-- habilidades -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">SKILLS</h3>
              </div>
              <br>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill1" value="<?php echo($row['skill1']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel1" value="<?php echo($row['nivel1']); ?>" > 
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill2" value="<?php echo($row['skill2']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel2" value="<?php echo($row['nivel2']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill3" value="<?php echo($row['skill3']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel3" value="<?php echo($row['nivel3']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill4" value="<?php echo($row['skill4']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel4" value="<?php echo($row['nivel4']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill5" value="<?php echo($row['skill5']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel5" value="<?php echo($row['nivel5']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder="Nome da skill." name="skill6" value="<?php echo($row['skill6']); ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="0 a 100 nivel de conhecimento." name="nivel6" value="<?php echo($row['nivel6']); ?>">
                  </div>
                </div>
              </div>
               <!-- habilidades-->
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">LINKS DE REDES SOCIAIS</h3>
              </div>
              <br>
              <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="URL DO SEU GITHUB" name="github" value="<?php echo($row['github']); ?>" > 
                  </div>
                </div>
                <br>
                <div class="row">
                  
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="URL DO SEU LINKEDIN" name="linkedin" value="<?php echo($row['linkedin']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="URL DO SEU INSTA" name="github" value="<?php echo($row['instagram']); ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="URL DO YOUTUBE" name="youtube" value="<?php echo($row['youtube']); ?>" > 
                  </div>
                </div>
                <br>
              </div>
               <!-- habilidades-->
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
            <!-- experiencia1-->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Experiência 1</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">   
                <form>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de início</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_inicio1" value="<?php echo($row['ano_inicio1']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de término ou Atuando</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_termino1" value="<?php echo($row['ano_termino1']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome Empresa</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_empresa1" value="<?php echo($row['nome_empresa1']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome da Experiência</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_experiencia1" value="<?php echo($row['nome_experiencia1']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Função</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="funcao1" value=""><?php echo($row['funcao1']); ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </div>
                <!-- fim experiencia2-->
                <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Experiência 2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">   
                <form>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de início</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_inicio2" value="<?php echo($row['ano_inicio2']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de término ou Atuando</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_termino2" value="<?php echo($row['ano_termino2']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome Empresa</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_empresa2" value="<?php echo($row['nome_empresa2']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome da Experiência</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_experiencia2" value="<?php echo($row['nome_experiencia2']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Função</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="funcao2" value=""><?php echo($row['funcao2']); ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </div>
                <!-- fim experiencia3-->
                <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Experiência 3</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">   
                <form>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de início</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_inicio3" value="<?php echo($row['ano_inicio3']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ano de término ou Atuando</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="ano_termino3" value="<?php echo($row['ano_termino3']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome Empresa</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_empresa3" value="<?php echo($row['nome_empresa3']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nome da Experiência</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="nome_experiencia3" value="<?php echo($row['nome_experiencia3']); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Função</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="funcao3" value=""><?php echo($row['funcao3']); ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                  </div>
                <!-- fim experiencia3-->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Educação</h3>
              </div>
              <!-- escolaridade1-->
              <div class="card-body">
                <label for="">data inicio</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data inicio" name="edu_inicio1" value="<?php echo($row['edu_inicio1']); ?>">
                <br>
                <label for="">data fim</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data final" name="edu_fim1" value="<?php echo($row['edu_fim1']); ?>">
                <br>
                <label for="">cursando</label>
                <input class="form-control" type="text" placeholder="informe o curso" name="edu_curso1" value="<?php echo($row['edu_curso1']); ?>">
                <br>
                <label>instituição</label>
                <input class="form-control" type="text" placeholder="informe a instituição" name="edu_institu1" value="<?php echo($row['edu_institu1']); ?>">
                <br>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Experiência no curso</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="edu_experi1" value=""><?php echo($row['edu_experi1']); ?></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              
              <!-- escolaridade fim1-->

              <!-- escolaridade2-->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Educação 2</h3>
              </div>
              </div>
              <div class="card-body">
                <label for="">data inicio</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data inicio" name="edu_inicio2" value="<?php echo($row['edu_inicio2']); ?>">
                <br>
                <label for="">data fim</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data final" name="edu_fim2" value="<?php echo($row['edu_fim2']); ?>">
                <br>
                <label for="">cursando</label>
                <input class="form-control" type="text" placeholder="informe o curso" name="edu_curso2" value="<?php echo($row['edu_curso2']); ?>">
                <br>
                <label>instituição</label>
                <input class="form-control" type="text" placeholder="informe a instituição" name="edu_institu2" value="<?php echo($row['edu_institu2']); ?>">
                <br>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Experiência no curso</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="edu_experi2" value=""><?php echo($row['edu_experi2']); ?></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- escolaridade fim2-->
            </div>
            <!-- escolaridade3-->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Educação 3</h3>
              </div>
            <div class="card-body">
                <label for="">data inicio</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data inicio" name="edu_inicio3" value="<?php echo($row['edu_inicio3']); ?>">
                <br>
                <label for="">data fim</label>
                <input class="form-control form-control-sm" type="text" placeholder="informe data final" name="edu_fim3" value="<?php echo($row['edu_fim3']); ?>">
                <br>
                <label for="">cursando</label>
                <input class="form-control" type="text" placeholder="informe o curso" name="edu_curso3" value="<?php echo($row['edu_curso3']); ?>">
                <br>
                <label>instituição</label>
                <input class="form-control" type="text" placeholder="informe a instituição" name="edu_institu3" value="<?php echo($row['edu_institu3']); ?>">
                <br>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Experiência no curso</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="edu_experi3" value=""><?php echo($row['edu_experi3']); ?></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- escolaridade fim3-->
              <!-- /.card-body -->
            </div> 
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
          </form>
          </div>
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
            </div>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>