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
     
      <div class="row">
          <div class="col-md-6">
              
              <img src="img/logo.jpg" class="center-block">
          </div>
        <div class="col-md-6">
          <h4 class="text-center">Cadastro de usuário</h4>
          <form role="form">
          
            <div class="form-group">
              <label for="exampleInputEmail1">Nome de usuário:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Informe um nome de usuário">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Repita a senha:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repetir Senha">
            </div>
            <button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
          
		  </form>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
      
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>
    <script src="js/cadastro.js"> </script>
    <script src="js/application.js"></script>

  </body>
</html>
