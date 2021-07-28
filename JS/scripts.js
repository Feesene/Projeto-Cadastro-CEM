
	function validar() {
	var nome	= registro.nome.value;
	var cpf = registro.cpf.value;
	var email	= registro.email.value;
	var senha	= registro.senha.value
	if(nome == ""){
		alert('Preencha o campo nome');
		registro.nome.focus();
		return false;
	   }
	 if(nome.lenght <= 6){
		alert('O nome precisa ter mais de 6 letras');
		registro.nome.focus();
		return false;
	   }
	   if (cpf == "" ){
		alert('Preencha o campo CPF');
		registro.cpf.focus();
		return false;
	}
		
	if (email =="" || email.indexOf('@') == -1){
		alert('Preencha o campo email');
		registro.email.focus();
		return false;
	}
	if (senha == ""){
		alert('Preencha o campo senha');
		registro.senha.focus();
		return false;
	}
	if (senha.length <= 5){
		alert('A senha precisa ter no mínimo 6 digitos');
		registro.senha.focus();
		return false;
}}
