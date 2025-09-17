function validarFormulario(formulario){
  if(formulario.nome_cliente.value === "" || formulario.nome_cliente.value === null) {
    alert("O campo Nome não pode ficar vazio.");
    formulario.nome_cliente.focus();
    return false;
  }
  if(formulario.cpf_cliente.value.length != 11) {
    alert("O campo CPF precisa ter 11 caracteres.");
    formulario.cpf_cliente.focus();
    return false;
  }
  //o campo e-mail precisa ser válido, ou seja, deve : "@" e "."
  if(formulario.email_cliente.value.indexOf("@") == -1 || formulario.email_cliente.value.indexOf(".") == -1) {
    alert("O campo E-mail não é válido.");
    formulario.email_cliente.focus();
    return false;
  }
}