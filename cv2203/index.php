<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  
  
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Creative CV</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
      <?php
                
        require_once('admin/action/conn.php');
        require_once('admin/action/sobre_update/selectid.php');
        //exit(var_dump($result));
        $row = $result->fetch_assoc();
        //exit(var_dump($row));
                                              
      ?>
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/uglybut.jpg" alt="Image"/></a></div>
          <div class="h2 title"><?php echo ($row['nome']); ?></div>
          <a class="btn btn-primary" href="" download data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download</a>
        </div>
      </div>
      <div class="section">
        <div class="container">

          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo($row['linkedin']); ?>" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-linkedin"></i></a>
          
          <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo($row['youtube']); ?>" rel="tooltip" title="Follow me on Twitter"><i class="fa-brands fa-youtube-square"></i></a>
          
          <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo($row['github']); ?>" rel="tooltip" title="Follow me on Google+"><i class="fa fa-github"></i></a>
          
          <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo($row['instagram']); ?>" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            
            <?php echo ($row['conteudo']); ?>
            <div class="form-group">
            <div class="info-box bg-gradient-info">
            <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
            </div>
            </div>
            </div>
            
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Idade:</strong></div>
              <div class="col-sm-8"><?php echo($row['idade']); ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo($row['email']); ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Telefone:</strong></div>
              <div class="col-sm-8"><?php echo($row['telefone']); ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Endereço:</strong></div>
              <div class="col-sm-8"><?php echo($row['endereco']); ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Languagem:</strong></div>
              <div class="col-sm-8"><?php echo($row['linguagem']); ?></div>
            </div>
            <form action="admin/about.php">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
      <form action="admin/about.php">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
      <br>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill1']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel1']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel1']); ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill2']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel2']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel2']); ?>%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill3']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel3']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel3']); ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill4']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel4']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel4']); ?>%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill5']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel5']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel5']); ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge"><?php echo($row['skill6']); ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo($row['nivel6']); ?>%;"></div><span class="progress-value"><?php echo($row['nivel6']); ?>%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="<?php echo($row['github']); ?>">
                  <figure class="cc-effect"><img src="images/project-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Recent Project</div>
                      <p>Web Development</p>
                    </figcaption>
              </div>    
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-4.jpg" alt="Image"/>
                    
                  </figure></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo($row['ano_inicio1']); ?> - <?php echo($row['ano_termino1']); ?></p>
            <div class="h5"><?php echo($row['nome_empresa1']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['nome_experiencia1']); ?></div>
            <p><?php echo($row['funcao1']); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo($row['ano_inicio2']); ?> - <?php echo($row['ano_termino2']); ?></p>
            <div class="h5"><?php echo($row['nome_empresa2']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['nome_experiencia2']); ?></div>
            <p><?php echo($row['funcao2']); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p><?php echo($row['ano_inicio3']); ?> - <?php echo($row['ano_termino3']); ?></p>
            <div class="h5"><?php echo($row['nome_empresa3']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['nome_experiencia3']); ?></div>
            <p><?php echo($row['funcao3']); ?></p>
          </div>
        </div>        
      </div>
      
    </div>
    <form action="admin/about.php">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    <br>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo($row['edu_inicio1']); ?> - <?php echo($row['edu_fim1']); ?></p>
            <div class="h5"><?php echo($row['edu_curso1']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['edu_institu1']); ?></div>
            <p><?php echo($row['edu_experi1']); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo($row['edu_inicio2']); ?> - <?php echo($row['edu_fim2']); ?></p>
            <div class="h5"><?php echo($row['edu_curso2']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['edu_institu2']); ?></div>
            <p><?php echo($row['edu_experi2']); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo($row['edu_inicio3']); ?> - <?php echo($row['edu_fim3']); ?></p>
            <div class="h5"><?php echo($row['edu_curso3']); ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo($row['edu_institu3']); ?></div>
            <p><?php echo($row['edu_experi3']); ?></p>
          </div>
        </div>
      </div>     
    </div>
    <form action="admin/about.php">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    <br>

    
</div>
<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/your@email.com" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">140, City Center, New York, U.S.A</p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">+1718-111-0011</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>anthony@company.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href=""><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">abinga</div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>