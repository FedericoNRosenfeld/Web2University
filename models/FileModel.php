<?php
class FileModel {
  function __construct() {

  }

  function subirArchivo($Directorio,$Archivo,$Nombre){
    return move_uploaded_file($Archivo, $Directorio.$Nombre);
  }
}
 ?>
