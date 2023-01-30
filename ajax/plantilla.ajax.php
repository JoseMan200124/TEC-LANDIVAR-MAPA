<?php
require_once "../controladores/mapa.controlador.php"; 
require_once "../modelos/mapa.modelo.php";
if($_POST['action'] == 'T-204'){
mostrarDisponibilidad('T-204');

}if($_POST['action'] == 'T-203'){
    mostrarDisponibilidad('T-203');
}if($_POST['action'] == 'T-213'){
    mostrarDisponibilidad('T-213');

} 
if($_POST['action'] == 'T-125'){
    mostrarDisponibilidad('T-125');
}
if($_POST['action'] == 'T-123'){
    mostrarDisponibilidad('T-123');
    
}
if($_POST['action'] == 'T-124'){
    mostrarDisponibilidad('T-124');
    
}
if($_POST['action'] == 'T-210'){
    mostrarDisponibilidad('T-210');
    
}if($_POST['action'] == 'T-216'){
    mostrarDisponibilidad('T-216');
    
}
if($_POST['action'] == 'T-216'){
    mostrarDisponibilidad('T-216');
    
}
if($_POST['action'] == 'T-120B'){
    mostrarDisponibilidad('T-120B');
    
}
if($_POST['action'] == 'T-120C'){
    mostrarDisponibilidad('T-120C');
    
}
if($_POST['action'] == 'T-119'){
    mostrarDisponibilidad('T-119');
    
}
if($_POST['action'] == 'T-214'){
    mostrarDisponibilidad('T-214');
    
}
if($_POST['action'] == 'T-212'){
    mostrarDisponibilidad('T-212');
    
}
if($_POST['action'] == 'T-206A'){
    mostrarDisponibilidad('T-206A');

}
if($_POST['action'] == 'T-206B'){
    mostrarDisponibilidad('T-206B');

}
if($_POST['action'] == 'B-10'){
//T-116
    mostrarDisponibilidad('B-10');

}
if($_POST['action'] == 'B-4'){
//T-113
        mostrarDisponibilidad('B-4');
}
if($_POST['action'] == 'T-123'){
    mostrarDisponibilidad('T-123');

}
if($_POST['action'] == 'T-110A'){
    mostrarDisponibilidad('T-110A');

}
if($_POST['action'] == 'T-209'){
    mostrarDisponibilidad('T-209');

}
if($_POST['action'] == 'T-117'){
    mostrarDisponibilidad('B-17');

}
if($_POST['action'] == 'T-118'){
    mostrarDisponibilidad('B-19');

}
if($_POST['action'] == 'T-207'){
    mostrarDisponibilidad('T-207');

}
if($_POST['action'] == 'T-208'){
    mostrarDisponibilidad('T-208');

}
function mostrarDisponibilidad($lab){
    date_default_timezone_set('America/Guatemala');
$dia = date("l"); 
$fechaActual = date('Y-d-m H:i:s.u');
$horaActual = date('Hi');
$fechaActualSubsting = substr($fechaActual,0,-3);

$No_dia = 0; 

if($dia == "Monday"){
    $No_dia = 1; 
}
if($dia == "Tuesday"){
    $No_dia = 2; 
}
if($dia == "Wednesday"){
    $No_dia = 3; 
}
if($dia == "Thursday"){
    $No_dia = 4; 
}
if($dia == "Friday"){
    $No_dia = 5; 
}
if($dia == "Saturday"){
    $No_dia = 6; 
}
if($dia == "Sunday"){
    $No_dia = 7; 
}
$disponibilidad = controladorMapa::ctrHorariosLabs($No_dia, $fechaActualSubsting, $lab, $horaActual);
$nombreCurso = []; 
if(!empty($disponibilidad)){$nombreCurso = controladorMapa::ctrObtenerNombreCurso($disponibilidad[0]["No_Curso"]); }
if(empty($disponibilidad)){
    if($lab == 'B-4'){
        $lab = "T-113";
    }
    if($lab == 'B-10'){
        $lab = "T-116";
    }
    if($lab == 'B-17'){
        $lab = "T-117";
    }
    if($lab == 'B-19'){
        $lab = "T-118";
    }
    echo '<script> 
    swal({
          title: "¡'.$lab.' Disponible!",
          text: "El laboratorio se encuentra disponible en este momento para uso libre",
          type:"success",
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
        });

</script>';

}else{
   // echo '<h1>'.$disponibilidad[0]["Hora_Inicio"].'</h1>';
   // echo '<h1>'.$disponibilidad[0]["Hora_Fin"].'</h1>';
   // echo '<h1>'.$nombreCurso[0]["Nombre"].'</h1>';
    echo '<script> 
    swal({
          title: "¡No disponible!",
          text: "El laboratorio no se encuentra disponible, se está impartiendo '. $nombreCurso[0]["Nombre"].' de: '.$disponibilidad[0]["Hora_Inicio"].' hasta: '.$disponibilidad[0]["Hora_Fin"].'",
          type:"warning",
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
        });

</script>';
}
}