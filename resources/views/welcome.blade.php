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
               url:'parteUno',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  graficarCuatroEsquinas(data);
               }

            });}



function linea(x1,y1,x2,y2,color,ctx) {
    
          ctx.moveTo(latitudVariacion(x1),longitudVariacion(y1));
          ctx.lineTo(latitudVariacion(x2),longitudVariacion(y2));
        
          return ctx;
          
          

}
function latitudVariacion(numero) {
    // return ((numero*100000)%100)*2;
    
    return ((numero*1))*1;

}
function longitudVariacion(numero) {
    // console.log("longitud :"+numero);
    return ((numero*1))*1;
    // return ((numero*10000)%100)*2;
}
    function graficarCuatroEsquinas(data) {
        var canvas = document.getElementById('practica1');
        var context = canvas.getContext('2d');

        
        var json_Casa=data['casa'];
        var json_Colonia=data['colonia'];

        // Graficar casa
        
        for (var i = 0, lon = json_Casa.length; i < lon; i++) 
        {
            try{
                console.log("si")
                context=linea(json_Casa[i]['latitud'],json_Casa[i]['longitud'],json_Casa[i+1]['latitud'],json_Casa[i+1]['longitud'],'#F0F',context);    
            }catch(error){
                context=linea(json_Casa[i]['latitud'],json_Casa[i]['longitud'],json_Casa[0]['latitud'],json_Casa[0]['longitud'],'#F0F',context);    
            }
        }
        for (var i = 0, lon = json_Colonia.length; i < lon; i++) 
        {
            try{
                context=linea(json_Colonia[i]['latitud'],json_Colonia[i]['longitud'],json_Colonia[i+1]['latitud'],json_Colonia[i+1]['longitud'],'#00F',context);    
            }catch(error){
                context=linea(json_Colonia[i]['latitud'],json_Colonia[i]['longitud'],json_Colonia[0]['latitud'],json_Colonia[0]['longitud'],'#00F',context);    
            }
        }

        context.stroke();
        
        
        

    }
</script>

<script type="text/javascript">
    function constructor() {
        const canvas =document.getElementById('practica1');
        const ctx = canvas.getContext('2d');
        canvas.width = (window.innerWidth)*5/6;
        canvas.height = (window.innerWidth)*1/3;
        console.log("width"+canvas.width);
        console.log("height"+canvas.height);
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