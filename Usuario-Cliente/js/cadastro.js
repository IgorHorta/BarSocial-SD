$(document).ready(function(){
	$( "form" ).submit(function( event ) {
		var array = $( this ).serializeArray();
		var json = {};
		jQuery.each(array, function() {
			json[this.name] = this.value || '';
		});
		event.preventDefault();
		
		$.ajax({
            type: "POST",
            url: "http://localhost:8080/BarSocial/user/signUp",
            data: json,
            dataType: "json"
        }).done(function() { 
             console.log("Usuario Cadastrado com sucesso");
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
    });
});

