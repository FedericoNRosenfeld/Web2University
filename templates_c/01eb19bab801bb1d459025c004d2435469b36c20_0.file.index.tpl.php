<?php
/* Smarty version 3.1.30, created on 2016-10-13 05:09:13
  from "/var/www/html/tpeweb2/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff4129910ec8_54485185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01eb19bab801bb1d459025c004d2435469b36c20' => 
    array (
      0 => '/var/www/html/tpeweb2/templates/index.tpl',
      1 => 1476342611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57ff4129910ec8_54485185 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Seccion principal donde se injecta contenido -->
    <section id="mainContent" class="container">
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
