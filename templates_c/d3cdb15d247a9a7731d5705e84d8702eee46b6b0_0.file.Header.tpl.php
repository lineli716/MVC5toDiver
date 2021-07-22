<?php
/* Smarty version 3.1.39, created on 2021-07-22 15:23:49
  from 'C:\xampp\htdocs\MVC5toDiver\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f971651f8c69_28376294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3cdb15d247a9a7731d5705e84d8702eee46b6b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\templates\\Cabeceras\\Header.tpl',
      1 => 1623263402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f971651f8c69_28376294 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

        <?php } else { ?>
            Home
        <?php }?>
      </title>  
    </head>

    <body>
    
    
    
    <?php }
}
