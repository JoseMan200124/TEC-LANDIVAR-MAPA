<?php
Class conexionBaseDeDatos{
    static public function conectar(){
        $user = "Desarrollotec";
        $pass = "tecmaster"; 
        $dbh = new PDO("sqlsrv:Server=10.100.161.253,1433;Database=nsislab", $user , $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $dbh; 
    }
}