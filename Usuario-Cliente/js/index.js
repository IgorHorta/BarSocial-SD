var  loggedUser= {
	name : '',
	password: '',
	accessLvl:'',
	id:'',
	order:{
		id: '',
		name : '',
		description : '',
		num : '',
		status : ''
	}
};

var ipAtual = "192.168.0.112"

function checkOrder(){
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/checkOrderStatus",
            data:{
				'user.name': loggedUser.name
			},
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
			//	alert(response.message); 
			 }else{
				console.log(response);
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
}


$(document).ready(function(){
	$( "#cadastrousuario" ).submit(function( event ) {
		var array = $( this ).serializeArray();
		var json = {};
		jQuery.each(array, function() {
			json[this.name] = this.value || '';
		});
		event.preventDefault();
		
		$.ajax({
            type: "POST",
            url:"http://"+ipAtual+":8080/BarSocial/user/signUp",
            data: json,
			//crossDomain : true,
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

	$( "#formCadastraPedido" ).submit(function( event ) {
		var array = $( this ).serializeArray();
		array.push({
			"name":"order.user.id",
			"value":loggedUser.id
		});
		var json = {};
		jQuery.each(array, function() {
			json[this.name] = this.value || '';
		});
		event.preventDefault();
		
		$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/makeOrder",
            data: json,
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
				alert(response.message); 
			 }else{
				$("#cadastro_pedido").css("display", "none");
				$( "#status" ).css ("display","");
				loggedUser.order = response.data;
				var task = setInterval(checkOrder, 10000);
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
    });


});