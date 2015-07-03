var  loggedUser= {
	name : '',
	password: ''
};



$(document).ready(function(){
	$( "#cadastro" ).submit(function( event ) {
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
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
				alert(response.message); 
				
			 }else{
				 loggedUser = response.data;
				 $("#cadastro").css("display", "none");

				 $( "#cadastro_pedido" ).css ("display","");


			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
                        
        });
    });




	$( "#cadastro_pedido" ).submit(function( event ) {
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
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
				alert(response.message); 
				console.log(loggedUser.name)
			 }else{
				 loggedUser = response.data;
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
    });


});