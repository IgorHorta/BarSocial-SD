$(document).ready(function(){
	$("form").submit(function( event ){
		$(this).hide();
		event.preventDefault(); // previne que a ação default do formulario de ser enviado
	});
});

