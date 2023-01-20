<?php
require_once "conexion.php";
class modeloMapa{
    static public function modeloMapaDatos($tabla,$item,$valor){

            if($item != null){
                $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item");
                $stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
                $stmt -> execute();
                return $stmt -> fetch();
            }else{
                $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT * FROM $tabla");
                $stmt -> execute();
                return $stmt ->fetchAll();
            }
            $stmt -> close();
            $stmt = null;
        }
    static public function modeloActualizacion($item,$valor,$tabla,$laboratorio,$disponibilidad){
        if($item != null){
            $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT * FROM $tabla UPDATE $tabla SET Disponibilidad = '$disponibilidad' WHERE $item =:$item");
            $stmt ->bindParam(":".$item,$valor,PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = conexionBaseDeDatos::conector()->prepare("SELECT *FROM $tabla");  
            $stmt-> execute();
            return $stmt ->fetchAll();
        }
        $stmt  -> close();
        $stmt = null;

    }
    static public function mdlHorariosLabs($NoDia, $fechaFin, $NoSalon,$HoraActual, $tabla){
        $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT *FROM $tabla WHERE No_Dia = :No_Dia AND Fecha_Fin >= :Fecha_Fin AND No_Salon = :No_Salon AND Hora_Inicio <= :Hora_Inicio AND Hora_Fin >= :Hora_Fin");
        $stmt ->bindParam(":No_Dia",$NoDia, PDO::PARAM_INT);
        $stmt ->bindParam(":Fecha_Fin", $fechaFin, PDO::PARAM_STR);
        $stmt ->bindParam(":No_Salon",$NoSalon, PDO::PARAM_STR);
        $stmt ->bindParam(":Hora_Inicio",$HoraActual, PDO::PARAM_STR);
        $stmt ->bindParam(":Hora_Fin",$HoraActual, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }
static public function mdlObtenerNombreCurso($No_Curso, $tabla){
    $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT *FROM $tabla WHERE No_Curso = :No_Curso ");
    $stmt ->bindParam(":No_Curso",$No_Curso, PDO::PARAM_STR);
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;

}
       

}
