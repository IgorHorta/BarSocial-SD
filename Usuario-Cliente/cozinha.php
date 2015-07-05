<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BarSocial</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../../dist/js/vendor/html5shiv.js"></script>
      <script src="../../dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <style>
      body {
        padding-top: 60px;
          padding-bottom:60px;
      }
    </style>

    <div class="container">
     
      <div class="row">
          <div class="col-md-4">
              <h3 class="text-center">Administração de pedidos</h3>
               <img src="img/logo.jpg" class="center-block" style="padding-top:20px;">
          </div>
        <div class="col-md-8">
         <form id="update-order-status" class="form">
             <div class="row" style="padding-bottom:50px;">
             <button  class="btn btn-primary btn-lg center-block" id="recebe_pedido">Receber Pedido</button>
             </div>
                 <div class="row">
                 <div class="col-md-6">
                 <h2 id="order_id">Pedido nº:</h2>
                     <h3 id="user_name">Sem pedidos</h3>
                 </div>
                 <div class="col-md-6">
                     <h5>Descrição do pedido:</h5>
                     <span>Nome do pedido: </span><span id="nome_pedido"></span>
                     <p></p>
                     <span>Quantidade: </span><span id="quant_pedido"></span>
                     <p></p>
                     <span>Observações: </span><span id="obs_pedido"></span>
                 </div>
             
             
             </div>
           
             <div class="row">
            <div class="form-group">
            <div class="form-group form-group-hg">
            <label class="col-sm-4 control-label" for="formGroupInputHuge">Status do Pedido:</label>
                <div class="col-sm-8">
              <select data-toggle="select" name="order.status" class="form-control select select-info">
                <option value="Recebido">Recebido</option>
                <option value="Preparando ingredientes">Preparando ingredientes</option>
                <option value="Cozinhando">Cozinhando</option>
                <option value="Quase pronto">Quase pronto</option>
                <option value="Seu pedido está pronto!">Seu pedido está pronto!</option>
                </select>
                </div>
            </div>
             </div>
                 </div>
             <div class="row">
           
             <h4>Mensagem para o cliente (opcional)</h4>
          
            <div class="form-group">
              <textarea id="msg_cliente" class="form-control" rows="3"></textarea>
            </div>
			<input type="hidden" id="order-to-update-id" name="order.id"></input>
                 
             </div>
             <div class="row">
              <button type="submit" class="btn btn-info btn-lg center-block" id="atualizar_pedido">Atualizar Pedido</button>
             </div>
          </form>
        </div>
      </div><!-- /.row -->
      
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>
	<script src="js/cozinha.js"></script>
    <script src="js/application.js"></script>

  </body>
</html>
