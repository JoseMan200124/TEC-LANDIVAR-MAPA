<?php
class controladorMapa
{
    public function plantilla(){
        include "vistas/plantilla.php"; 
    }
    static public function obtenerHorariosCursos($item, $valor){
        $tabla = "dbo.Seccion_Detalle"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    static public function obtenerLaboratorio($item,$valor){
        $tabla = "dbo.Laboratorios"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    static public function obtenerCursos($item,$valor){
        $tabla = "dbo.Curso"; 
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor); 
        return $respuesta; 
    }
    static public function insertarDatosDisponibilidad($item,$valor){
        $tabla = "dbo.mapa";
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor);
        return $respuesta;

    }
    static public function ctrHorariosLabs($NoDia, $fechaFin, $NoSalon, $HoraActual){
        $tabla = "dbo.Seccion_Detalle"; 
        $respuesta = modeloMapa::mdlHorariosLabs($NoDia, $fechaFin, $NoSalon,$HoraActual, $tabla); 
        return $respuesta; 
    }
    static public function ctrObtenerNombreCurso($No_Curso){
        $tabla = "dbo.Curso";
        $respuesta = modeloMapa::mdlObtenerNombreCurso($No_Curso, $tabla);
        return $respuesta; 
    }
    static public function eventos($item,$valor){
        $tabla = "dbo.Detalle_Salon_Evento";
        $respuesta = modeloMapa::modeloMapaDatos($tabla,$item,$valor);
        return $respuesta;
    }
}