
<?php
include_once 'views/HomeView.php';
class HomeController{
  private $vista;

  function __construct(){
    $this->vista = new HomeView();
  }

  function MostrarHome(){
    $this->vista->mostrar();
  }
}
?>
