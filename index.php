<?php

/*using php to send email validation*/
include_once 'php/send_email.php';
?>






<html>
<head lang="en">
  <meta charset="UTF-8">
  <!-- <meta name=viewport content="width=360" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--to work offline bootstrap CSS
  <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css"> -->

  <!--work on line-->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  <!-- bootstrap 4.0.0-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<!-- my style css -->
<link rel="stylesheet" href="css/style.css">

<!--  -->
  <!--css for font awesome
  <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- animate n scroll cdn css -->

  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <!-- end of animate on scroll-->

  <!-- my css
  <link rel="stylesheet" type="text/css" href="css/custom-style.css">-->


  <!--skill-->

  <link rel="stylesheet" href="skills/animate.css">
  <link rel="stylesheet" href="skills/habilidades.css">

  <!-- jquery to work off line-->
  <script type="text/javascript" src="jquery/jquery-3.2.0.min.js"></script>
  <!-- jquery to work on line -->
  <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
-->
<script src="skills/jquery.skills.js"></script>
<script src="js/functions.js"></script>


<script>

$(document).ready(function(){
  $(".skills").skill();

});
/*fix the error */

</script>




<!--end of skill-->
<style >
/* base structure */


</style>
<!-- -->
<title>Portfolio</title>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- new bootstrap -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">André de Carvalho</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#quem_sou">Quem sou ?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section_certificacoes">Certificacões</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#habilidades">Habilidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section_contacta_me">Contacta me</a>
      </li>
    </ul>
  </div>
</nav>


<!-- section jumbotron -->

<section>
  <div class="jumbotron">
    <h1 class="display-4">André de Carvalho</h1>
    <p class="lead">Programador Web & UI disigner</p>
    <hr class="my-4">
    <h3>Vamos levar o teu Negocio a outro Nível</h3>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="tel:+244 944783640" role="button"> <i class="fa fa-telephone">+ 244 944783640</i> </a>
    </p>

  </div>
</section>
<!-- jumbotron section ends here -->

<!-- section quem sou começa aqui -->
<section class="section" id="quem_sou">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title responsive">Quem Sou ? <hr class="my-3 "></h1>


      </div>
      <div class="col-md-12">
        <p>
          <img   class="rounded-circle img-fluid" src="image/background.jpg" alt="minha imagem"/>
        </p>
      </div>
      <div class="container">
        <div class="row">
          <h3 class="col-md-12">
            Ola! sou o André,
          </h3>
          <h4 class="col-md-12">
            Jovem alegre e entusiastico amante de Programação
          </h4>
          <div class="col-md-12">

          </div>

          <br>
        </div>
      </div>

      <div class="container">
        <div class="row" id="saiba_mais">
          <h2 class="col-md-12">Saiba Mais</h2>
          <div class="col-md-12">
            <br>
          </div>
          <div class="container">
            <div class="row">


              <button class="btn btn-sucess bg-inverse col-md-4" type="button" name="button"></i class="fa fa-github" aria-hidden="false"> GitHubb</button>

              <button class="btn btn-primary col-md-4" type="button" name="button">  <i class="fa fa-twitter" aria-hidden="true"></i> twitter</button>

              <button class="btn btn-danger col-md-4" type="button" name="button"><i  class="fa fa-google-plus" aria-hidden="true"> </i> google +</button>

            </div>
          </div>


        </div>



      </div>

    </div>

  </div>

</section>

<!--section certificações starts here-->
<div class="clear">

</div>

<section class="section " id="section_certificacoes">
  <h1 class="title">Certificações<hr class="my-3"></h1><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6" >
        <div class="card">
          <img class="card-img-top" src="image/udemy.jpg" alt="Imagem do certificado" style="width:100%;">
          <div class="card-block">
            <h3 class="card-title">udemy</h3>
            <p class="card-text">The Complete Developer Course.</p>
            <a href="https://udemy-certificate.s3.amazonaws.com/image/UC-EVYG2GX4.jpg" target="_blank" class="btn btn-primary"> clique para ver...</a>
            <p></p>
          </div>
        </div>
      </div>

    <div class="col-sm-6" >
      <div class="card"  >
        <img class="card-img-top" src="image/udemy.jpg" alt="Card image cap" style="width:100%;">
        <div class="card-block">
          <h3 class="card-title">CCA</h3>
          <p class="card-text">cambdrige certification Authority - css</p>
          <a href="#" class="btn btn-primary">clique para ver...</a>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<!--sectio certificações end here-->

<!-- section quem sou ends here -->
<div class="clear">

</div>
<section id="habilidades" class="skills section">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">

      <h1 class="letra_grande title" align="center">Habilidades<hr class="my-3"></h1>
      <h6>Desenvolvimento  WEB</h6>

    <div class="habilidades_contenedor">
      <div id="codeconSkills">
        <div class="codeconSkillbar">
          <div id="" class="skillBar" skill-percentage="90%" skill-color="#448AFF">
            <span class="codeconSkillArea ">HTML</span>
            <span class="PercentText ">90%</span>
          </div>

        </div>
        <div class="codeconSkillbar">
          <div id="" class="skillBar" skill-percentage="70%" skill-color="#FFC107">
            <span class="codeconSkillArea">Javascript</span>
            <span class="PercentText">70%</span>

          </div>

        </div>
        <div class="codeconSkillbar">
          <div id="" class="skillBar" skill-percentage="80%" skill-color="#009688">
            <span class="codeconSkillArea ">CSS/CSS3</span>
            <span class="PercentText">80%</span>
          </div>

        </div>
        <div class="codeconSkillbar">
          <div id="" class="skillBar" skill-percentage="80%" skill-color="#ff5722">
            <span class="codeconSkillArea">jQuery</span>
            <span class="PercentText ">80%</span>

          </div>

        </div>

        <div class="codeconSkillbar">
          <div id="" class="skillBar" skill-percentage="70%" skill-color="#673AB7">
            <span class="codeconSkillArea">PHP</span>
            <span class="PercentText">70%</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
  </section>
  <!--skills ends here -->

  <!--serviços section_projectos starts here-->
  <section class="section" id="section_projectos">
    <div class="container">
    <h1 class="title">Projectos <hr class="my-3 "></h1><br>

      <div class="row">
        <div class="col-sm-6">
          <div class="card" >
            <img class="card-img-top" src="image/ce.png" alt="Card image cap" style="width:100%;">
            <div class="card-block">
              <h3 class="card-title">consultorio empresarial</h3>
              <p class="card-text">empresa de consultoria de gestão que marca agora sua actividade online com seu website.</p>
              <a href="http://www.consultorioempresarial.co.ao/" target="_blank" class="btn btn-primary">veja...</a>
              <p></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" >
            <img class="card-img-top" src="image/loso.png" alt="Card image cap" style="width:100%;">
            <div class="card-block">
              <h3 class="card-title">loso</h3>
              <p class="card-text">loso é uma pagina de teste, feita em forma de template com diversas tecnologias.</p>
              <a href="#" class="btn btn-primary">veja...</a>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--servic3s section ends here-->
  <!--section contacta-me starts here-->

  <section class="section" id="section_contacta_me">
    <div class="container">

      <h1>contacta-me <hr class="my-3"></h1><br><br><br>
      <div id="erro">
        <?php echo $erro.$sucessosms; ?>
      </div>
      <form class="form-group">
        <div class="row">
          <div class="col-lg-4">
            <input autocorrect=off autocapitalize=words type="text" class="form-control" id="nome" placeholder="seu nome">
          </div>
          <div class="col-lg-4" >
            <input autocorrect=off autocapitalize=words type="email" class="form-control" id="email"  placeholder="seu email">
          </div>
          <div class="col-lg-4">
            <input autocorrect=off autocapitalize=words type="number" class="form-control" id="numeroDeTelefone" placeholder="ex: +244 944783640">
          </div>


          <div class="form-group col-md-12" ><br>
            <label for="nome" class="sr-only">Mensagem</label>
            <textarea class="form-control" id="mensagem" cols="8" rows="8" placeholder="sua Mensagem ex: Ola André... Eu preciso de uma Pagina Web"></textarea></div>
            <button type="submit" class="btn btn-primary float-right" id="botaoEnviar">Enviar Mensagem</button>
          </form>
        </div>
      </section>

      <!--secton contacta-me ends here-->

      <!-- footer -->
      <footer class="container" id="footer">
    <p>Redes Socias.</p>
    <i class="  fa fa-facebook-official opacity"></i>
    <i class=" fa fa-instagram opacity"></i>
    <i class=" fa fa-snapchat opacity"></i>
    <i class=" fa fa-pinterest-p opacity"></i>
    <i class=" fa fa-twitter opacity"></i>
    <i class=" fa fa-linkedin opacity"></i>

       </footer>


      <!--to work offline

      <script type="text/javascript" src="bootstrap-4.0.0-alpha.6/docs/assets/js/vendor/tether.min.js"></script>
      <script src="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js"></script> -->

      <!-- to work online -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
      <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
      <script src="js/validation.js"></script>
      <script type="text/javascript">

      AOS.init();

      </script>
      <!---custom js
      <script src="js/custom.js"></script> -->



      </body
