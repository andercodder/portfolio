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
