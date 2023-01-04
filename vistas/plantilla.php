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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


/* CSS */
.button-58 {
  align-items: center;
  background-color: #06f;
  border: 2px solid #06f;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  fill: #000;
  font-size: 16px;
  font-weight: 600;
  height: 48px;
  justify-content: center;
  letter-spacing: -.8px;
  line-height: 24px;
  min-width: 140px;
  outline: 0;
  padding: 0 17px;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-58:focus {
  color: #171e29;
}

.button-58:hover {
  background-color: #3385ff;
  border-color: #3385ff;
  fill: #06f;
}

.button-58:active {
  background-color: #3385ff;
  border-color: #3385ff;
  fill: #06f;
}

@media (min-width: 768px) {
  .button-58 {
    min-width: 80px;
  }
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
        <div class="rutas">
          
        </div>

            <div class="window-mockup">
                <div class="window-bar"></div>
            </div>

            <div id="mapplic2"></div>

            <div id="mapplic"></div>

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
<script type="text/javascript" src="<?php echo $url;?>vistas/js/rutas.js"></script>

    </div>
    </section>

</body>
</html>