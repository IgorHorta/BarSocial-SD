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

var ipAtual = "localhost"

function checkOrder(){
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/checkOrderStatus",
            data:{
				'order.id': loggedUser.order.id,
				'order.name': loggedUser.order.name,
				'order.user.id': loggedUser.id
			},
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
					alert(response.message); 
			 }else{
				loggedUser.order = response.data;
				updateOrderStatusView();
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
}

function updateOrderStatusView(){
	$("#user-name").html(loggedUser.name);
	$("#order-status").html(loggedUser.order.status);
}





$(document).ready(function(){
	$( "#logout-bt" ).click(function(){
		location.reload();
	});
	
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
				updateOrderStatusView();
				var task = setInterval(checkOrder, 10000);
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
    });


});