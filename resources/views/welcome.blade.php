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


<body class="index-page sidebar-collapse" onload="constructor()">
    <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Internet de las cosas</a>
                
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      Graficador
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="insertaDatos" class="nav-link">
                      Insertar datos
                    </a>
                  </li>
                </ul>
              
            </div><!-- /.container-->
          </nav>
    <div class="main">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Práctica 7: Raspberry Pi (geolocalización)</h2>
                </div>
          <!--  buttons -->
                <div id="buttons" class="cd-section">
                    <div class="title">
                        <h3><small>Parte 1) Dibujar la geolocalización de una casa.</small></h3>
                        
                        <div class="center">
                            <canvas id="practica1"  style="border:1px solid #AAA; ">

                            </canvas>   
                            <button class="btn btn-info" onclick="getMessage()">Graficar</button>
                        </div>
                    </div>
                    <div class="title">
                        <h3><small>Parte 2) Obtener la posición del Raspberry Pi</small></h3>
                        <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
      <button >Click</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


<p id="XA">5</p>
<p id="YA">5</p>



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<script >
    function getMessage() {
            $.ajax({
               type:'GET',
               url:'cuatroEsquinas',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  graficarCuatroEsquinas(data['esq1_latitud'], data['esq1_longitud'],  data['esq2_latitud'], data['esq2_longitud'],  data['esq3_latitud'], data['esq3_longitud'],  data['esq4_latitud'], data['esq4_longitud'], )
               }

            });}
function latitudVariacion(numero) {
    return ((numero*100000)%100);
}
function longitudVariacion(numero) {
    return ((numero*10000)%100)
}

    function graficarCuatroEsquinas(latUno, lonUno,  latDos, lonDos,  latTres, lonTres, latCuatro, lonCuatro) {
        var canvas = document.getElementById('practica1');
        var context = canvas.getContext('2d');

        context.scale(1,1);
              // context.translate(-30,-30);

          context.beginPath();
          var x1=latitudVariacion(latUno);
          var y1=longitudVariacion(lonUno);
          var x2=latitudVariacion(latDos);
          var y2=longitudVariacion(lonDos)+y1;
          var x3=latitudVariacion(latTres)-x2;
          var y3=longitudVariacion(lonTres);
          var x4=latitudVariacion(latCuatro);
          var y4=longitudVariacion(lonCuatro);

          context.moveTo(x1,y1);
          context.lineTo(x2,y2);

          context.moveTo(x2,y2);
          context.lineTo(x3,y3);
          
console.log("x1: "+x1+"   x2: "+x2+"   x3: "+x3+"   x4: "+x4);
console.log("y1: "+y1+"   y2: "+y2+"   y3: "+y3+"   y4: "+y4);
          // context.moveTo(latTres*2, lonTres*2);
          // context.lineTo(latCuatro*2,lonCuatro*2);
          // context.moveTo(latCuatro*2, lonCuatro*2);
          // context.lineTo(latCuatro*2,lonCuatro*2);
          context.stroke();
          // console.log("ya");
    }
</script>

<script type="text/javascript">
    function constructor() {
        const canvas =document.getElementById('practica1');
        const ctx = canvas.getContext('2d');
        canvas.width = (window.innerWidth)*5/6;
        canvas.height = (window.innerWidth)*1/3;
        //     ctx.moveTo(30*x, 0);
        //     ctx.lineTo(30*x, 500);
        //     ctx.strokeStyle = '#CCC';
        //     ctx.stroke();  
        
    }



    function draw() {

    }

    function success(position){

    }



</script>
</body>
</html>