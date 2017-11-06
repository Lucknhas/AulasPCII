function validacao() {
	if(document.form.nome.value==""){
		alert("Por favor, preencha o campo nome.");
		document.form.nome.focus();
		return false;
	}
	
	if(document.form.rg.value==""){
		alert("Por favor, preencha o campo RG.");
		document.form.rg.focus();
		return false;
	}
	
	
	if(document.form.cpf.value.length <11) {
		alert("CPF invalido minimo 11 digitos");
		document.form.cpf.focus();
		return false
	}
	
	if(document.form.telefone.value==""){
		alert("Por favor, preencha o campo Telefone.");
		document.form.telefone.focus();
		return false;
	}
	
	if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1){
		alert("Esse endereço de email nao é valido, Use(@) e (.)");
		document.form.email.focus();
		return false;
	}
	
	if(document.form.cidade.value==""){
		alert("Por favor, preencha o campo cidade.");
		document.form.cidade.focus();
		return false;
	}
	
	
	
	if(document.form.cep.value==""){
		alert("Por favor, preencha o campo cep.");
		document.form.cep.focus();
		return false;
	}
	
}
	

	


	