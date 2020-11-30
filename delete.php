<?php
use Illuminate\Database\Capsule\Manager as DB; 
require "vendor\autoload.php";
require "config\database.php";
require_once "header.php";

DB::table('calificaciones')->where('idcalificaciones', $_GET['id'])->delete();

 echo "se elimino la calificacion con el id: {$_GET['id']}
 <a class='button' href='consultar.php'>REGRESAR</a>";
