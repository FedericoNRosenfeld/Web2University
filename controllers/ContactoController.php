
<?
include_once 'views/ContactoView.php';
class ContactoController{
  private $vista;

  function __construct(){
    $this->vista = new ContactoView();
  }

  function MostrarContacto(){
    $this->vista->mostrar();
  }
}
?>
