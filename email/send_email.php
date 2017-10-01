<?php
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
