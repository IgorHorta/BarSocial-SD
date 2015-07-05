var ipAtual = "localhost";
var actualOrder;

function updateStatus(order){
	$("#order-to-update-id").val(order != undefined ? order.id : "");
	$("#order_id").html("Pedido nº "+ (order != undefined ? order.id : ""));
	$("#user_name").html(order != undefined ? order.user.name : "Sem Pedidos");
	$("#nome_pedido").html( order != undefined ? order.name : "");
	$("#quant_pedido").html( order != undefined ? order.num : "");
	$("#obs_pedido").html( order != undefined ? order.description :"" );
}

$("#recebe_pedido").click(function(event){
	event.preventDefault();
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/getOrder",
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
				updateStatus();
				$("#user_name").html(response.message);
			 }else{
				console.log(response.data);
				updateStatus(response.data);
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
	
});
	
$("#update-order-status").submit(function(event){
	var array = $( this ).serializeArray();
	var json = {};
	jQuery.each(array, function() {
		json[this.name] = this.value || '';
	});
	event.preventDefault();
	
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/updateOrderStatus",
            data: json,
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
});


