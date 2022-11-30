<!DOCTYPE html>
<html lang="es">
<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mapa interactivo TEC Landívar</title>
    <?php
    $url = ruta::ctrRuta();
    ?>
<!--=====================Etiquetas meta===========================-->

    <meta name="description"content="Mapa interactivo TEC Landívar"/>  

<!--=====================Estilos Css===========================-->

        <link rel="preload" type="text/css" href="<?php echo $url;?>vistas/css/map.css" as="style">
        <link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/mapplic/mapplic.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preload" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<!--================PAGINA ACTUALIZADA SIEMPRE========================-->
<!--<script>
setInterval(function() {
    $("html").load("plantilla.php");
},3000);
</script>-->

</head>
<body>
    <!--=============Estilos rápidos para el mapa=============-->
<style>
    body{
	font-family: 'Roboto', sans-serif!important;
}
a{
	text-decoration: none; 
}
@media screen and(max-width: 760px){
	#content{
		height: 0;
	}
}
#content{
	height: 100vh;
}
tspan{
	font-family: 'Roboto', sans-serif!important;
	font-weight: 700;
}
text{
	font-family: 'Roboto', sans-serif!important;
	font-weight: 700;

}
</style>

<?php
/*$variable=date("Y-m-d H:i:s");
echo '<p>'.$variable.'</p>';*/
?>
<div id="preloader" class="preloader-container">
	<div class="animation">
		<div class="player">
        <lottie-player src="https://lottie.host/6883869d-4a98-46c5-ad1e-2709f3b7eeb7/kV8NaQmmEZ.json" background="transparent" style="width: 300px; height: 300px;" speed="1" autoplay></lottie-player>		</div>
	</div>
</div>
<section id="mapa">

<div id="content">
    <section id="map-section" class="inner over">

        <!-- Map -->
        <div class="map-container">


            <div class="window-mockup">
                <div class="window-bar"></div>
            </div>

            <div id="mapplic2"></div>

            <div id="mapplic"></div>

        </div>

    </section>

<section>
    
    <section id="disponibilidad">
   <div class="container">
    <div class="abs-center">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">

           
    
        </div>
    </div>  
    <div class="row">

  

        <?php
       /* llamada de archivo Json con información de los laboratorios 
       $json = file_get_contents('vistas/tec.json');
        $json_data = json_decode($json,true);
         $otro = $value['locations']; 
    
$item = null; 
$valor = null; 
$horas = controladorMapa::obtenerHorariosCursos($item, $valor); 
$laboratorios = controladorMapa::obtenerLaboratorio($item,$valor);
$cursos = controladorMapa::obtenerCursos($item,$valor);
$eventos = controladorMapa::eventos($item,$valor);
$hora = new DateTime("now",new DateTimeZone('America/Guatemala'));
$dia_actual = (int)$hora->format('d');
echo $dia_actual;
$hora_actual = (int)$hora->format('Hi');
$mostrar_actual = strtotime($hora->format('Y-m-d'));
$fecha_validacion = strtotime($hora->format('Y-m-d H:i:s'));
echo'<h1>'.$hora->format('Hi').'</h1>'; 
$validar_fecha = TRUE;
foreach($horas as $key => $value){
   // if($value["No_Salon"] == "A-11"){
        echo'    <div class="col-md-6 d-flex">
        <h1>'.$value["No_Salon"].'</h1>
        </div>'; 
      
   // }
}
?>

 

        <?php
        $item = null; 
        $valor = null; 

        foreach($horas as $key => $value){

          
            
           
            if(strtotime($value["Fecha_Fin"]) > $fecha_validacion &&  $fecha_validacion> strtotime($value["Fecha_Inicio"])) {
                foreach($eventos as $key2 =>$value2){
                    if( strtotime($value2["Fecha_Fin"]) == $mostrar_actual){
                        echo '    <div class="col-md-6 d-flex">
                    
                        <p>----'.$value["Hora_Inicio"].'----</p>';
                        echo '<p>----'.$value["Hora_Fin"].'-----</p>';
                        if($hora_actual > (int)$value["Hora_Inicio"] && (int)$value["Hora_Fin"]> $hora_actual){
                            echo'<h1> NO DISPONIBLE </h1>
                            </div> ';
                        }else{
                            echo'<h1> DISPONIBLE</h1>
                            </div> ';
                        }
                    }
                }
               
                
            }
         

        }
        */
        ?>

    </div>
    </div>
   </div>
     
       
    </section>
</section>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo $url;?>vistas/js/hammer.min.js"></script>
        <script type="text/javascript" src="<?php echo $url;?>vistas/js/jquery.easing.js"></script>
        <script type="text/javascript" src="<?php echo $url;?>vistas/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo $url;?>vistas/mapplic/mapplic.js"></script>
        <script type="text/javascript" src="<?php echo $url;?>vistas/js/lazyload.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var mapplic = $('#mapplic').mapplic({
                    source: 'vistas/tec.json',
                    height: 460,
                    sidebar: true,
                    minimap: true,
                    zoom: true,
                    fullscreen: true,
                    hovertip: true,
                    mapfill: true,
                    maxscale: 4,
                    animate: true,
                    developer: false,
                    smartip: true,
                    routes: true,
                    panel: true,
                    alphabetic: true,
                    fullscreen: true
                });

                /* Landing Page */
                $('.usage').click(function(e) {
                    e.preventDefault();
                    $('.editor-window').slideToggle(200);
                });

                $('.editor-window .window-mockup').click(function() {
                    $('.editor-window').slideUp(200);
                });
            });
        </script>
 <!--=====================Agregar clase a todas las imagenes para lazy load===========================-->
 <script type="module">   
'use strict'

//Agregar texto diferente a los botones
var botones = document.getElementsByClassName('mapplic-tooltip-link');
//Cambiar texto de los botones de mapplic
for(var i = 0; i<botones.length;i++){
    botones[i].innerHTML = "ver más";
    console.log(botones[i]);
}

</script>
<script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script>
<script>
    let box = document.querySelector("#preloader"),
	btn = document.querySelector("#skip");

function fadeOut() {
	box.classList.add("visuallyhidden");
	box.addEventListener(
		"transitionend",
		function (e) {
			box.classList.add("hidden");
		},
		{
			capture: false,
			once: true,
			passive: false
		}
	);
}

setTimeout(fadeOut, 6000);

</script>
    </div>
    </section>

</body>
</html>