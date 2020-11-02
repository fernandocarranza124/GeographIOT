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
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<script >
    function getMessage() {
            $.ajax({
               type:'GET',
               url:'cuatroEsquinas',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                alert(data);
                  $("#msg").html(data);
               }
            });}
</script>

<body class="index-page sidebar-collapse" onload="getMessage()">
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Práctica 7: Raspberry Pi (geolocalización)</h2>
                </div>
          <!--  buttons -->
                <div id="buttons" class="cd-section">
                    <div class="title">
                        <h3><small>Parte 1) Dibujar la geolocalización de una casa.</small></h3>
                        <button onclick="getMessage();">click me</button>
                        <div class="container center">
                            <canvas id="myCanvas"  style="border:1px solid #AAA; background-color: #0266db;">

                            </canvas>   
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





<script type="text/javascript">
    function constructor() {
        const canvas =document.getElementById('myCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = (window.innerWidth)*2/3;
        canvas.height = (window.innerWidth)/2;
    }



    function draw() {

    }

    function success(position){

    }



</script>
</body>
</html>