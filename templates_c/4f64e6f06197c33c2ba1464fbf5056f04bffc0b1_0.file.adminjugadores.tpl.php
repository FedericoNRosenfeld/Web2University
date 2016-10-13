<?php
/* Smarty version 3.1.30, created on 2016-10-13 05:10:15
  from "/var/www/html/tpeweb2/templates/adminjugadores.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff4167bd6f68_38961253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f64e6f06197c33c2ba1464fbf5056f04bffc0b1' => 
    array (
      0 => '/var/www/html/tpeweb2/templates/adminjugadores.tpl',
      1 => 1467222306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff4167bd6f68_38961253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <form>
      <h2 class="text-center">Añadir jugador</h2>
      <div class="form-group">
        <label for="nombreJugador">Nombre</label>
        <input type="text" class="form-control" id="nombreJugador" placeholder="Lebron James" required>
      </div>
      <div class="form-group">
        <label for="posicionJugador">Posicion</label>
        <input type="text" class="form-control" id="posicionJugador" placeholder="Base">
      </div>
      <div class="form-group">
        <label for="numeroJugador">Numero</label>
        <input type="number" class="form-control" id="numeroJugador" placeholder="23">
      </div>
      <button id="crear" class="btn btn-default center-block">Crear</button>
    </form>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-responsive">
      <thead>
        <th>Nombre</th>
        <th>Posicion</th>
        <th>Numero</th>
        <th>Borrar</th>
      </thead>
      <tbody id="tablaJugadoresAdmin">
      </tbody>
    </table>
  </div>
</div>
<?php }
}
