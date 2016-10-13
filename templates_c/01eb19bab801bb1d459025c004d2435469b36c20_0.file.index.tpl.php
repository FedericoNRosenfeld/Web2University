<?php
/* Smarty version 3.1.30, created on 2016-10-13 03:12:11
  from "/var/www/html/tpeweb2/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff25bb4ad4d5_19412170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01eb19bab801bb1d459025c004d2435469b36c20' => 
    array (
      0 => '/var/www/html/tpeweb2/templates/index.tpl',
      1 => 1467222306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff25bb4ad4d5_19412170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NBA PlayOffs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link href="css/estilos.css" rel="stylesheet">
  </head>

  <body>
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

    <!-- Seccion principal donde se injecta contenido -->
    <section id="mainContent" class="container">
    </section>

    <footer class="container">
      <div class="row">
        <div class="col-sm-4 text-center">
          <a href="https://www.facebook.com/nba" target="_blank"><img class="social" src="images/facebooklogo.png"></img></a>
        </div>
        <div class="col-sm-4 text-center">
          <a href="https://www.instagram.com/nba/" target="_blank"><img class="social" src="images/instagramlogo.png"></img></a>
        </div>
        <div class="col-sm-4 text-center">
          <a href="https://twitter.com/nba" target="_blank"><img class="social" src="images/twitterlogo.png"></img></a>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- bootstrap -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- JS propio -->
    <?php echo '<script'; ?>
 src="js/partialRender.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/players.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/postDeletePlayer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/firstLoad.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
