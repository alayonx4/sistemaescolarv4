<?php
use Illuminate\Database\Capsule\Manager as DB; 

require "vendor\autoload.php";
require "config\database.php";
require_once "header.php";

DB::table('calificaciones')->insert(
    ['calificaciones.idcalificaciones'=> $_POST['calificaciones']],
);

 echo "<h1>datos guardados</h1><br><a>href='inicio.html'>regresar </a>";



 