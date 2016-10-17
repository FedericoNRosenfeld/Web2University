<?php
require_once "config/ConfigDB.php";

// la idea de este modelo es la de ocuparse de la conexion con la base de datos
class BaseModel {
  protected $db;

  function __construct() {
    $DBConfig = new ConfigDB();
    $this->db = new PDO('mysql:host='.ConfigDB::Server.';dbname='.ConfigDB::DBName.';charset=utf8',ConfigDB::User,ConfigDB::Pass);
  }
}
?>
