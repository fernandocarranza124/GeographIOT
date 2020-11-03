<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="css/material-kit.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Internet de las cosas</a>
                
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a href="\geograph/public/" class="nav-link">
                      Graficador
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      Insertar datos
                    </a>
                  </li>
                </ul>
              
            </div><!-- /.container-->
          </nav>
    <div class="main">
        <div class="section section-basic">
          <div class="container">
            <form action="guardaDatos" method="post" accept-charset="utf-8">
              @csrf
            <div class="title">
              <h5>Esquina #1</h5>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud de la primer esquina</label>
                  <input type=" number" class="form-control" id="latUno" name="latUno">
                   
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud de la primer esquina</label>
                  <input type=" number" class="form-control" id="lonUno" name="lonUno">
                   
                </div>
              </div>
            </div>
            <div class="title">
              <h5>Esquina #2</h5>
            </div>
            <div class="row">

              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud de la segunda esquina</label>
                  <input type=" number" class="form-control" id="latDos" name="latDos">
                   
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud de la segunda esquina</label>
                  <input type=" number" class="form-control" id="lonDos" name="lonDos">
                   
                </div>
              </div>
            </div>
            <div class="title">
              <h5>Esquina #3</h5>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud de la tercer esquina</label>
                  <input type=" number" class="form-control" id="latTres" name="latTres">
                   
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud de la tercer esquina</label>
                  <input type=" number" class="form-control" id="lonTres" name="lonTres">
                   
                </div>
              </div>
            </div>
            <div class="title">
              <h5>Esquina #4</h5>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud de la cuarta esquina</label>
                  <input type=" number" class="form-control" id="latCuatro" name="latCuatro">
                   
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud de la cuarta esquina</label>
                  <input type=" number" class="form-control" id="lonCuatro" name="lonCuatro">
                   
                </div>
              </div>

            </div>
            <input type="submit" class="btn btn-primary" value="Guardar">
          </div>
          
        </form>
        </div>
    </div>
</body>
</html>