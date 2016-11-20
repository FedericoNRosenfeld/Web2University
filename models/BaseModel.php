<?php
require_once $_SERVER['DOCUMENT_ROOT']."/tpeweb2/config/ConfigDB.php";

// la idea de este modelo es la de ocuparse de la conexion con la base de datos
class BaseModel {
  protected $db;

  function __construct() {
    $DBConfig = ConfigDB::getDBParams();
    $this->db = new PDO('mysql:host='.$DBConfig["Server"].';dbname='.$DBConfig["DBName"].';charset=utf8',$DBConfig["User"],$DBConfig["Pass"]);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>
