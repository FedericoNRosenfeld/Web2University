<?php
/* Smarty version 3.1.30, created on 2016-10-17 00:55:24
  from "D:\xampp\htdocs\Proyectos\Playoff\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5804055cad1ec0_34535253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '354f1dd53a503472dcf6768c145abebb55d5f5b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Playoff\\templates\\contacto.tpl',
      1 => 1476555377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5804055cad1ec0_34535253 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="row">
    <form class="col-md-6 col-md-offset-3">
      <h2 class="text-center">Desea ponerse en contacto con nosotros? Envienos un mensaje!</h2>
      <div class="form-group">
        <label for="nombreContacto">Nombre</label>
        <input type="text" class="form-control" id="nombreContacto" placeholder="Pedro Perez">
      </div>
      <div class="form-group">
        <label for="mailContacto">E-mail</label>
        <input type="email" class="form-control" id="mailContacto" placeholder="pedro.perez@email.com">
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-default center-block">Enviar</button>
    </form>
  </div>
  <div class="row">
    <form class="col-md-6 col-md-offset-3">
      <h2 class="text-center">Suscribase al Newsletter</h2>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Pedro Perez"/>
      </div>
      <div class="form-group">
        <label for="mail">E-mail</label>
        <input type="email" id="mail" class="form-control" placeholder="pedro.perez@email.com"/>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox">
            Noticias
          </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox">
          Resultados
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox">
          Partidos
        </label>
      </div>
      <button type="submit" class="btn btn-default center-block">Enviar</button>
    </form>
  </div>
<?php }
}
