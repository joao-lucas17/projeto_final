
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Projeto Final E2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        position: relative;
        float: left;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .img{
          margin-top: 50px;
          float: left;
          width: 70%;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url("bootstrap/css/carousel.css") ?>" rel="stylesheet">
    
    <link href="<?= base_url("bootstrap/css/rodape.css") ?>" rel="stylesheet">
    
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
      
      
    <header>
        <!--Inicio do menu-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
    <a class="navbar-brand" href="#">NUTRIIF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Relatório</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url("servicos/index")?>">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Área restrita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
        <!--Final do menu-->
</header>

<main role="main">
<!--    Inicio do slide (carousel)-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
      
    <div class="carousel-inner">
<!--        Imagem 1-->
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#0b2038"/></svg>      
        <div class="container">
          <div class="carousel-caption text-right">
    
                <img class="bd-placeholder-img" src="<?= base_url("bootstrap/img/fome-1.jpg")?>" width="70%" height="5%">
            <p><br><br>Segundo dados do Programa das Nações Unidas para o Meio Ambiente (PNUMA), uma em cada sete pessoas
                no mundo sofre com desnutrição, e um terço de toda a comida produzida mundialmente é perdida todo ano (https://jornal.usp.br/atualidades/fome-e-desperdicio-de-comida-precisam-ser-conciliados/)</p>
  
          </div>
        </div>
      </div>
<!--        Imagem 2-->
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#0b2038"/></svg>
            
        <div class="container">
          <div class="carousel-caption text-right">
    
                <img class="bd-placeholder-img" src="<?= base_url("bootstrap/img/rest.jpg")?>" width="75%" height="5%">
            <p><br><br><br>No refeitório trabalham profissionais muito bem capacitados, que nos proporcionam alimentos da melhor
                        qualidade. A receita para isso é muito amor e dedicação para com a saúde alimentar dos que frequentam o restaurante estudantil.</p>
  
          </div>
        </div>
        
      </div>
<!--        Imagem 3-->
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#0b2038"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
    
                <img class="bd-placeholder-img" src="<?= base_url("bootstrap/img/logo2.jpg")?>" width="75%" height="5%">
            <p><br><br><br>   Temos um dos restaurantes estudantis mais bem estruturados do Brasil e nunca nos faltou alimento. Por isso, não desperdice</p>
  
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <!--    Final do slide (carousel)-->

<!--Inicio do conteudo-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?= $contents ?>
        </div>
    </div>
</div>
<!--Final do conteudo-->

  <!-- Inicio do rodape -->
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Logo</div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
        <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-ul">
          <li><a href="http://webenlance.com"> Career</a></li>
          <li><a href="http://webenlance.com"> Privacy Policy</a></li>
          <li><a href="http://webenlance.com"> Terms & Conditions</a></li>
          <li><a href="http://webenlance.com"> Client Gateway</a></li>
          <li><a href="http://webenlance.com"> Ranking</a></li>
          <li><a href="http://webenlance.com"> Case Studies</a></li>
          <li><a href="http://webenlance.com"> Frequently Ask Questions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2020 - Trabalho de conclusão do curso IFSULDEMINAS - CAMPUS INCONFIDENTES</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="http://webenlance.com">webenlance.com</a></li>
        <li><a href="http://webenlance.com">About us</a></li>
        <li><a href="http://webenlance.com">Blog</a></li>
        <li><a href="http://webenlance.com">Faq's</a></li>
        <li><a href="http://webenlance.com">Contact us</a></li>
        <li><a href="http://webenlance.com">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>
<!--  Final do rodape-->
</main>
      <script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js")?>" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="<?= base_url("bootstrap/js/bootstrap.min")?>"></script>
      <script>window.jQuery || document.write('<script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js")?>"<\/script>')</script>
      <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js")?>" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  </body>
</html>
