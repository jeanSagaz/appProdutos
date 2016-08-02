$( document ).ready(function() {

	$("#form").validate({
		rules: {
			nome: {
				required: true,
				minlength: 5
			},
			email: {
				required: true,
				email: true
			},
			setor: "required"
		},
		messages: {
			nome: {
				required: "Nome deve ser informado",
				minlength: "O nome deve ter no mínimo 5 caracteres"
			},
			email: "Por favor digite um e-mail válido",
			setor: {
				required: "Setor deve ser informado",
				minlength: "O setor deve ter mais de dois caracteres"
			}
		}
	});

});