<?php
require_once dirname(__DIR__)."/config/ConfigDB.php";

// la idea de este modelo es la de ocuparse de la conexion con la base de datos
class BaseModel {
  protected $db;

  function __construct() {
    $this->db = new PDO('mysql:host='.Server.';dbname='.DBName.';charset=utf8',User,Pass);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>
