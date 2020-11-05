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
          <a href="{{route('index')}}" class="nav-link">
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
        <div class="row">
          <div class="col-6">
            <div class="title">
              <h3>Coordenadas de la casa</h3>
            </div>
            @php
            $contador=1;
            @endphp
            @foreach($coordsCasa as $coord)
            <div class="title">
              <h5>
                @php
                echo "Esquina # ".$contador++; 
                @endphp
              </h5>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud </label>
                  <input type=" number" class="form-control" disabled="" value="{{$coord->latitud}}">
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud </label>
                  <input type=" number" class="form-control"  disabled="" value="{{$coord->longitud}}">
                </div>
              </div>
            </div>   
            @endforeach

            <div class="title">
              <h5>
                @php
                echo "Esquina # ".$contador++; 
                @endphp
              </h5>
            </div>
            <form action="storeDatosCasa" method="post" accept-charset="utf-8">
              @csrf
              <div class="row">
                <div class="col-lg-3 col-sm-4">
                  <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Ingresa latitud</label>
                    <input type=" number" class="form-control" id="latitud" name="latitud">
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Ingresa longitud</label>
                    <input type=" number" class="form-control" id="longitud" name="longitud">
                  </div>
                </div>
              </div>   
              <input type="submit" class="btn btn-primary" value="Guardar">
              <a href="reiniciaBDCasa" title="">
                <input type="button" class="btn btn-danger" value="Reiniciar coordenadas">
              </a>
            </form>
          </div>
          <div class="col-6">
            <div class="title">
              <h3>Coordenadas de la colonia</h3>
            </div>
            @php
            $contador=1;
            @endphp
            @foreach($coordsColonia as $coord)
            <div class="title">
              <h5>
                @php
                echo "Punto # ".$contador++; 
                @endphp
              </h5>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Latitud </label>
                  <input type=" number" class="form-control" disabled="" value="{{$coord->latitud}}">
                </div>
              </div>
              <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                  <label for="exampleInput1" class="bmd-label-floating">Longitud </label>
                  <input type=" number" class="form-control"  disabled="" value="{{$coord->longitud}}">
                </div>
              </div>
            </div>   
            @endforeach

            <div class="title">
              <h5>
                @php
                echo "Punto # ".$contador++; 
                @endphp
              </h5>
            </div>
            <form action="storeDatosColonia" method="post" accept-charset="utf-8">
              @csrf
              <div class="row">
                <div class="col-lg-3 col-sm-4">
                  <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Ingresa latitud</label>
                    <input type=" number" class="form-control" id="latitud" name="latitud">
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                  <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Ingresa longitud</label>
                    <input type=" number" class="form-control" id="longitud" name="longitud">
                  </div>
                </div>
              </div>   
              <input type="submit" class="btn btn-primary" value="Guardar">
              <a href="reiniciaBDColonia" title="">
                <input type="button" class="btn btn-danger" value="Reiniciar coordenadas">
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function sendMessage() {
      $.ajax({
       type:'POST',
       url:'storeDatos',
       data:{
        token: '_token = <?php echo csrf_token() ?>',
      },

      success:function(data) {
        alert("si");
      }

    });}
  </script>
</body>
</html>