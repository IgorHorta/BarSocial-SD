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

function getOrder(){
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/getOrder",
			crossDomain : true,
            dataType: "json"
        }).done(function(response) { 
             if(response.status == false){
			//	alert(response.message); 
			 }else{
				console.log(response.data.id);
               
			 }
        }).fail(function() { 
            alert("Erro no Servidor"); 
        });
}



function updateStatus(){
	$.ajax({
            type: "POST",
            url: "http://"+ipAtual+":8080/BarSocial/user/getOrder",
            data:{
				'order.status': loggedUser.order.status,
                'user.id':loggedUser.id
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