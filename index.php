<?php

  /*using php to send email validation*/
  $erro = "";
  $sucessosms = "";


  if ($_POST) {

      if (!$_POST['email']) {
        $erro .= "O campo de email é obrigatorio preencha-o .<br>";
      }

      if (!$_POST['nome']) {
        $erro .= "O campo nome é obrigatorio preencha-o .<br>";
      }
      if (!$_POST['numero']) {
        $erro .= "O campo numero é obrigatorio preencha-o .<br>";
      }
      if (!$_POST['mensagem']) {
        $erro .= "O campo de mensagem é obrigatorio preencha-o .<br>";
      }
      if (!$_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
        $erro .= "O seu endereço de email é invalido .<br>";
      }

        if ($erro != "") {

          $erro = '<div class="alert alert-danger" role="alert"><p>Existem erros no seu formulario, corriga-os e tente de novo</p>' . $erro . '<div>';
        }
        /*se a conexão estiver boa enviar o email */
        else {
          $envarPara = "me@mydomain.com";
          $nome = $_POST['nome'];
          $headers = "De:".$_POST['email'];
          $numero = "Numero de Telefone do Sr." .$_POST['nome'] . "" .$_POST['numero'];
          $mensagem = $_POST['mensagem'];

          if(mail($enviarPara, $nome,$headers,$numero,$mensagem)){
            $sucessosms = '<div class="alert alert-success">A sua mensagem foi enviada </div>';
          }
          else {
            $erro = '<div class=alert alert-success>A sua mensagem não pode ser enviada</div>';
          }

        }
    }

?>






<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--to work offline bootstrap CSS
<link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css"> -->

<!--work on line-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<!-- -->
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

<script>

  $(document).ready(function(){
    $(".skills").skill();

  });

  /*fix the error */
  $(".navbar").click(function () {

    $navbar = $(this);
    //getting the next element
    $content = $navbar.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $navbar.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Collapse" : "Expand";
        });
    });

});
/*end fix the error*/

/*smooth scroll */
$(document).ready(function(){
  'use strict';
  $('.nav-link').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1500);
            return false;
        }
    }
  });
});

/* End of SMOOTH SCROLL */


/*sending email with ajax */








</script>




<!--end of skill-->
<style >
  /* base structure */
  html,
body {
  height: 100%;
  background-color: #333;
  color: #eeeeee;
  width: 100%;


}
html {
  position: relative;
  min-height: 100%;

}
body {
  /* Margin bottom by footer height */
  margin-bottom: 0px;
  position: relative;
  overflow-x: hidden;
  overflow-y: scroll;
}
@media screen and (max-width:764px) {
body {
  overflow-x: hidden;
  overflow-y: scroll;
  width: 100%;
  margin-right:0px;
  padding-right:0px;

  }
}
/* edit jumbotron    */
    .jumbotron{
      background-image:url(image/4.jpg);
      background-position:50% 50%;
      background-size:cover;
      background-repeat: no-repeat;
      background-color: #14387E;
      color: #ffffff;
      height:100%;
      text-align: center;
      padding-top: 20%;
      width: 100%;


    }
.section{
    width: 100%;
    height: 100%;
    margin: 0px;
    margin-top:0px;
    padding-top: 20px;
    text-align: center;

}

.section h1 {
  text-transform: uppercase;
  text-align: center;
  padding-top: 200px;

}
.section img {
  width: 12%;
}
.section p{
  text-align: center;
}
#saiba_mais{
  text-align: center;

}
.skills {
  /*background-image: url(image/2.jpg);*/
  background-color: inherit;
  background-size: cover;
  color: #ffffff;

}
.title{

	text-transform: capitalize;
	font: bold 32px 'Open Sans', sans-serif;
	margin-bottom: 35px;
	text-align: center;


}

hr{
	width: 160px;
	height: 2px;
	background-color: #2196F3;
	border: 0;
	margin-bottom: 80px;
  text-align: center;

}
a{
	text-decoration: none;
	color: inherit;
	cursor: pointer;

	opacity: 0.9;
}

a:hover{
	opacity: 1;
}

a.btn{
	color: #fff;
	border-radius: 4px;
	text-transform: uppercase;
	background-color: #2196F3;
	font-weight: 800;
	text-align: center;
}
#section_contacta_me{
 background-image: url("image/7.jpg");
  background-size: cover;
  background-position:50% 50%;
  margin-top: 0%;
  padding-top: 0%;
}
 #botaoEnviar{
   margin-left: auto;
   margin-right: auto;
 }
 .card-img-top img{
   width: 100%;
 }
 @media screen and (max-width:768px) {
img {
    width:100%;
}
.container-fluid {
    max-width:100%;
    width: 100%;
}

.col-md-6{
    width:100%;
    float:left;
    margin:0;
    margin-bottom: 5%;
  }
  .card{
    margin-bottom: 4%;
  }
}
@media screen and (max-width:768px) {
  #section_contacta_me {
    margin-top:100%;
  }

}
#section_certificacoes{
/*  background-color: #eeeeee;*/
  background-size: 50% 50%;
  padding-top: -15px;

}
#section_projectos{
/*  background-color: #eeeeee;*/
  text-decoration: none;
}
.card{
  box-shadow: 0 10px 20px #f5f5f5; /*rgba(0,0,0,0.15);*/
  transition: box-shadow 0.3s ease-in-out;
  border-radius: 5px;
  -webkit-transition: box-shadow 3s -webkit-transform 2s;
    transition: box-shadow 3s;
    color:#333;
}

.card:hover {
  box-shadow: 0 10px 20px 10px rgba(0,0,0,0.3);
}
.footer{
  background-color: #f5f5f5;
  position: aboslute;
  width: 100%;
  height: 80px;
  color: black;
  bottom: 0;
  line-height: 60px;
  margin-bottom: 0px;
  padding-bottom: 0;
  margin-top: 0px;

}
.clear{
  clear: both;
}


</style>
<!-- -->
    <title>Portfolio</title>
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="50">
  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">André de Carvalho</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mt-md-0 mt-2 navbar-right">
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

<!--  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md  fixed-top" >
 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar_collapse" aria-controls="#navbar_collapse" aria-expanded="true" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>-->
 <!-- <a class="navbar-brand" href="#"><img src="imagens/logo-small.png" alt="logo" /></a>-->
<!--
 <div class="collapse navbar-collapse" id="navbar_collapse">
   <ul class="navbar-nav mr-auto mt-2 mt-md-0 navbar-right">
     <li class="nav-item active">
       <a class="nav-link" href="index.php">Andre de Carvalho <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#about">Quem Sou ? </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#features">Projectos</a>
     </li>
       <li class="nav-item">
         <a class="nav-link" href="#contacto">Contacta-me</a></li>
   </ul>

 </div>
</nav>

-->
   <!-- section jumbotron -->

   <section>
       <div class="jumbotron">
         <h1 class="display-3">André de Carvalho</h1>
              <p class="lead">Programador Web & UI disgner</p>
              <hr class="my-4">
              <h3>Vamos levar o teu Negocio a outro Nível</h3>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button"> <i class="fa fa-telephone">+ 244 944783640</i> </a>
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
              <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-duration="1000"  class="rounded-circle img-fluid" src="image/background.jpg" alt="minha imagem"/>
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
          <h1 class="title">Certificações<hr class="my-3 "></h1><br>
          <div class="container-fluid">
            <div class="row">
          <div class="col-md-4 offset-md-2" data-aos="fade-down">
             <div class="card">
            <img class="card-img-top" src="image/udemy.jpg" alt="Card image cap" style="width:100%;">
              <div class="card-block">
                <h3 class="card-title">udemy</h3>
                <p class="card-text">The Complete Developer Course.</p>
                <a href="https://udemy-certificate.s3.amazonaws.com/image/UC-EVYG2GX4.jpg" target="_blank" class="btn btn-primary"> clique para ver...</a>
          </div>
            </div>
          </div>
          <div class="col-md-4 offset-md-" >
            <div class="card" data-aos="fade-zoom-in"     data-aos-easing="ease-in-back" data-aos-delay="300">
              <img class="card-img-top" src="image/udemy.jpg" alt="Card image cap" style="width:100%;">
              <div class="card-block">
                <h3 class="card-title">CCA</h3>
                <p class="card-text">cambdrige certification Authority - css</p>
                <a href="#" class="btn btn-primary">clique para ver...</a>
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


	<h1 class="letra_grande title" align="center">Habilidades</h1>

	<div class="habilidades_contenedor">
		<h2  >Desenvolvimento  WEB</h2>
		<div id="codeconSkills">
			<div class="codeconSkillbar">
				<div id="" class="skillBar" skill-percentage="100%" skill-color="#448AFF">
					<span class="codeconSkillArea ">HTML</span>
					<span class="PercentText ">100%</span>
				</div>

			</div>
			<div class="codeconSkillbar">
			<div id="" class="skillBar" skill-percentage="80%" skill-color="#FFC107">
				<span class="codeconSkillArea">Javascript</span>
				<span class="PercentText">80%</span>

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

</section>
<!--skills ends here -->

<!--serviços section starts here-->
<section class="section" id="section_projectos">

  <h1 class="title">Projectos <hr class="my-3 "></h1><br>
  <div class="container-fluid">
    <div class="row">
  <div class="col-md-4 offset-md-2">
    <div class="card" data-aos="fade-down-right" data-aos-duration="1000">
      <img class="card-img-top" src="image/ce.png" alt="Card image cap" style="width:100%;">
      <div class="card-block">
        <h3 class="card-title">consultorio empresarial</h3>
        <p class="card-text">empresa de consultoria de gestão que marca agora sua actividade online com seu website.</p>
        <a href="http://www.consultorioempresarial.co.ao/" target="_blank" class="btn btn-primary">veja...</a>
      </div>
    </div>
  </div>
  <div class="col-md-4 offset-md-" >
    <div class="card" data-aos="fade-down-left" data-aos-duration="1000">
      <img class="card-img-top" src="image/loso.png" alt="Card image cap" style="width:100%;">
      <div class="card-block">
        <h3 class="card-title">loso</h3>
        <p class="card-text">loso é uma pagina de teste, feita em forma de template com diversas tecnologias.</p>
        <a href="#" class="btn btn-primary">veja...</a>
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
            <input type="text" class="form-control" id="nome" placeholder="seu nome" data-aos="fade-down-right" data-aos-duration="800">
          </div>
          <div class="col-lg-4" >
            <input type="email" class="form-control" id="email"  placeholder="seu email" data-aos="fade-up" data-aos-duration="800">
          </div>
          <div class="col-lg-4">
            <input type="number" class="form-control" id="numeroDeTelefone" placeholder="ex: +244 944783640" data-aos="fade-up-left" data-aos-duration="800">
          </div>


  <div class="form-group col-md-12" data-aos="zoom-out-down" data-aos-duration="800"><br>
  <label for="nome" class="sr-only">Mensagem</label>
<textarea class="form-control" id="mensagem" cols="8" rows="8" placeholder="sua Mensagem ex: Ola André... Eu preciso de uma Pagina Web"></textarea></div>

<button type="submit" class="btn btn-primary float-right" id="botaoEnviar">Envia Mensagem</button>

</form>




   </div>
  </section>

<!--secton contacta-me ends here-->

<!-- footer -->
<footer class="footer">
    <div class="container">
      <div class="row">
                <p class="col-md-6"> Direitos de autor André de Carvalho &copy 2017</p>
                <div id="footer_padding">
                  <i class="fa fa-twitter col-md-3" aria-hidden="true" style="color:blue;"></i>
                  <i class="fa fa-google-plus col-md-3" aria-hidden="true" style="color:red;"></i>

                </div>

      </div>
    </div>
</footer>


 <!--to work offline

          <script type="text/javascript" src="bootstrap-4.0.0-alpha.6/docs/assets/js/vendor/tether.min.js"></script>
          <script src="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js"></script> -->

          <!-- to work online -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
         <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script type="text/javascript">

    AOS.init();
    $("form").submit(function(e){

        var erro = "";

        if ($("#nome").val() == "") {
          erro += "O Campo Nome é obrigatorio Preencha-o<br>";

        }
        if ($("#email").val() == "") {
          erro += "O Campo de Email é obrigatorio Preencha-o<br>";

        }
        if ($("#numero").val() == "") {
          erro += "O Campo Numero é obrigatorio Preencha-o<br>";

        }
        if ($("#mensagem").val() == "") {
          erro += "O Campo mensagem é obrigatorio Preencha-o<br>";

        }
        if (erro != "") {
          $("#erro").html('<div class="alert alert-danger role=alert"><p><strong>Existem erros no seu formulario:</strong></p>' + erro + '</div>');
            return false;
        }else {
          return true;
        }
    })
</script>
          <!---custom js
          <script src="js/custom.js"></script> -->



          </body
