<?php
//// parte de este documento es
/// CO0D1GO BASADO en el codigo de AXEL
////
  include_once 'config/ConfigApp.php';
  require_once "models/BaseModel.php";
  require_once "views/InstallView.php";

  $Vista = new InstallView();
  //Nos fijamos si llegan datos del formulario
  if(isset($_POST["host"]) && isset($_POST["user"]) && isset($_POST["db-pw"]) && isset($_POST["dbname"])){
    $configFile = "config/ConfigDB.php";
    $archivo = file($configFile);
    $archivo[2] = changeValue($archivo[2], $_POST["host"]);
    $archivo[3] = changeValue($archivo[3], $_POST["user"]);
    $archivo[4] = changeValue($archivo[4], $_POST["db-pw"]);
    $archivo[5] = changeValue($archivo[5], $_POST["dbname"]);
    file_put_contents($configFile, $archivo);

    $querys = getSQL(ConfigApp::$ARCHIVO_SQL);
    $dbname = $_POST["dbname"];

    $conexion = new PDO('mysql:host='.Server.';charset=utf8',$_POST["user"],$_POST["db-pw"]);
    $conexion->exec('CREATE DATABASE IF NOT EXISTS '.$dbname);
    $conexion->exec('USE '.$dbname);
    $i = 0;
    while ($i < count($querys) && strlen($conexion->errorInfo()[2]) == 0) {
      $conexion->exec($querys[$i]);
      $i++;
    }

    if($i == count($querys)){
      $db_correcto=1;
    } else {
      $db_correcto=$conexion->errorInfo()[2];
    }
    //mostramos el resultado
    $Vista->mostrarResultados($db_correcto);
  } else {
    //Probamos si se puede conectar, caso contrario redirigimos
    try {
      $Modelo = new BaseModel();
      $Instalado = true;
    } catch (PDOException $e) {
      $Vista->mostrarFormInstall();
      $Instalado = false;
    }

    if ($Instalado){
      $Vista->mostrarTodoOk();
    }
  }

  function getSQL($nombre){
    $querys = fopen($nombre, "r+");
    $sql = "";
    while (!feof($querys)) {
      $linea = fgets($querys);
      $linea = str_replace("'", '"', $linea);
      if(!preg_match('/--/', $linea))   $sql .= $linea;
    }
    fclose($querys);
    $querys = explode(";", $sql);
    unset($querys[count($querys)-1]);
    return $querys;
  }

  function changeValue($variable, $value){
    $start = '';
    $end = '");';
    $i = 0;
    while ($i < strlen($variable) && !strpos($start, ', "')) {
      $start .= $variable[$i];
      $i++;
    }
    $newVar = $start.$value.$end.PHP_EOL;
    return $newVar;
  }
?>
