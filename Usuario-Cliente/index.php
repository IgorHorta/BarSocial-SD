<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    
    

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
      }
    </style>

    <div class="container">
     
        
<div id="cadastro">
      <div class="row">
          <div class="col-md-6">
              
              <img src="img/logo.jpg" class="center-block">
          </div>
        <div class="col-md-6">
          <h4 class="text-center">Cadastro de usuário / Login</h4>
          <form id= "cadastrousuario" role="form">
          
            <div class="form-group">
              <label for="exampleInputEmail1">Nome de usuário:</label>
              <input type="text" class="form-control" id="exampleInputText1" name="user.name" placeholder="Informe um nome de usuário">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="user.password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
          
		  </form>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
</div> <!-- fim da tela de cadastro -->
        
        
<div id="cadastro_pedido" style="display:none;">
         <div class="row">
          <div class="col-md-4">
              <h3 class="text-center">Cadastrar novo pedido</h3>
               <img src="img/logo.jpg" class="center-block" style="padding-top:20px;">
          </div>
        <div class="col-md-8">
         <form id="formCadastraPedido" class="form">
             <h4>Marque o item que deseja pedir:</h4>
            <div class="form-group form-inline">
             
              <label class="radio" for="item1">
                <input type="radio" name="order.name" data-toggle="radio" value="Bolo" id="item1" required checked>
                Bolo<img src="img/bolo.jpg" class="img-responsive">
              </label>
              <label class="radio" for="item2">
                <input type="radio" name="order.name" data-toggle="radio" value="Hamburger" id="item2" required>
                 Hamburger<img src="img/burguer.jpg" class="img-responsive">
              </label>
              <label class="radio" for="item3">
                <input type="radio" name="order.name" data-toggle="radio" value="Cerveja" id="item3" required>
                 Cerveja<img src="img/cerveja.jpg" class="img-responsive">
              </label>
                <label class="radio" for="item4">
                <input type="radio" name="order.name" data-toggle="radio" value="Sushi" id="item4" required>
                 Sushi<img src="img/sushi.jpg" class="img-responsive">
              </label>
                 <label class="radio" for="item5">
                <input type="radio" name="order.name" data-toggle="radio" value="Hot-dog" id="item5" required>
                 Hot-dog<img src="img/doge.jpg" class="img-responsive">
              </label>
            </div>
             <div class="row">
            <div class="form-group">
            <div class="form-group form-group-hg">
            <label class="col-sm-4 control-label" for="formGroupInputHuge">Selecione a quantidade:</label>
                <div class="col-sm-8">
              <select data-toggle="select" name="order.num" class="form-control select select-primary">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>
                </div>
            </div>
             </div>
                 </div>
           
             <h4>Observações</h4>
            <div class="form-group">
              <textarea name="order.description"class="form-control" rows="3"></textarea>
            </div>
              <button type="submit" class="btn btn-primary btn-lg" id="envia_pedido">Enviar Pedido</button>
          </form>
        </div>
      </div><!-- /.row -->
</div> <!-- fim cadastro pedido -->
        
<div id="status" style="display:none;">
        
        <div class="row">
          <div class="col-md-4">
              <h3 id="user-name" class="text-center">Olá Igor!</h3>
               <img src="img/logo.jpg" class="center-block" style="padding-top:20px;">
          </div>
        <div class="col-md-8">
         <form class="form">
             <h4>Status do seu pedido:</h4>
           <div class="jumbotron">
        <h1 id="order-status">Cozinhando</h1>
        <p class="lead">Estamos preparando tudo para ficar perfeito para você</p>
        <p><a id = "logout-bt"class="btn btn-lg btn-success"  role="button" id="sair">Sair</a></p>
      </div>
           
            
        </div>
      </div><!-- /.row -->
</div> <!-- fim da div status -->
        
        
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>
    <script src="js/index.js"> </script>
    <script src="js/application.js"></script>

  </body>
</html>
