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
          <div class="col-md-4">
              <h3 class="text-center">Cadastrar novo pedido</h3>
               <img src="img/logo.jpg" class="center-block" style="padding-top:20px;">
          </div>
        <div class="col-md-8">
         <form action="#" class="form">
             <h4>Marque o item que deseja pedir:</h4>
            <div class="form-group form-inline">
             
              <label class="radio" for="item1">
                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="item1" required checked>
                Bolo<img src="img/bolo.jpg" class="img-responsive">
              </label>
              <label class="radio" for="item2">
                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="item2" required>
                 Hamburger<img src="img/burguer.jpg" class="img-responsive">
              </label>
              <label class="radio" for="item3">
                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="item3" required>
                 Cerveja<img src="img/cerveja.jpg" class="img-responsive">
              </label>
                <label class="radio" for="item4">
                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="item4" required>
                 Sushi<img src="img/sushi.jpg" class="img-responsive">
              </label>
                 <label class="radio" for="item5">
                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="item5" required>
                 Hot-dog<img src="img/doge.jpg" class="img-responsive">
              </label>
            </div>
             <div class="row">
            <div class="form-group">
            <div class="form-group form-group-hg">
            <label class="col-sm-4 control-label" for="formGroupInputHuge">Selecione a quantidade:</label>
                <div class="col-sm-8">
              <select data-toggle="select" class="form-control select select-primary">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
              </select>
                </div>
            </div>
             </div>
                 </div>
           
             <h4>Observações</h4>
          
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
            </div>
              <button type="submit" class="btn btn-primary btn-lg" id="envia_pedido">Enviar Pedido</button>
          </form>
        </div>
      </div><!-- /.row -->
      
    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>

    <script src="js/application.js"></script>

  </body>
</html>
