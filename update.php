<?php
use Illuminate\Database\Capsule\Manager as DB; 
require "vendor\autoload.php";
require "config\database.php";


 DB::table('calificaciones')
->where('idcalificacion', $_POST['idcalificacion'])
->update(['calificacion' => $_POST['calificacion']]);

  echo "se actualizo la calificacion con el id: {$_POST['idcalificacion']}
  <a class='button' href='consultar.php'>regresar</a>";