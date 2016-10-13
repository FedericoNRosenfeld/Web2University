<?php
/* Smarty version 3.1.30, created on 2016-10-13 04:10:11
  from "/var/www/html/tpeweb2/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff3353e71b62_52592361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7115808cc1c5f5c967d0901766a807b05d547625' => 
    array (
      0 => '/var/www/html/tpeweb2/templates/header.tpl',
      1 => 1476342597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff3353e71b62_52592361 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="container hidden-xs">
  <div class="row">
    <img id="logo" src="images/logo.jpg"></img>
  </div>
</header>

<nav id="navigationBar" class="container navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
        <li class="navItem" name="home"><a href="#">Home</a></li>
        <li class="navItem" name="fixture"><a href="#">Fixture</a></li>
        <li class="navItem" name="equipos"><a href="#">Equipos</a></li>
        <li class="navItem" name="contacto"><a href="#">Contacto</a></li>
        <li id="admin"><a href="#">Admin Jugadores</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<?php }
}
