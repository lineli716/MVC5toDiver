<?php
/* Smarty version 3.1.39, created on 2021-07-22 15:44:24
  from 'C:\xampp\htdocs\MVC5toDiver\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f976388a46a8_93917371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2db8b326e1f3eeefccc1b2d56f09015f2bbdc117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC5toDiver\\templates\\Home.tpl',
      1 => 1626961462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60f976388a46a8_93917371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card-panel red lighten-5">
            
    <div class="container">
        <div class="card-panel orange accent-1">
           <div class="row">
                 <div class="input-field col s12">
                    <h1 class=" center-align  blue-text">REGISTRO</h1>    
                  </div>
            </div>
        </div>
                
        <form method="post" action="?class=user&method=login">
            <div class="row">
                <div class="input-field col s4">
                    <input  name="nombre" id="first_name2" type="text" class="validate"/>
                    <label class="active" for="first_name2">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input  name="pass" id="first_name3" type="password" class="validate"/>
                    <label class="active" for="first_name3">Password</label>
                </div>
            </div>    
          </div>
          
          <div class="row">
              <div class="input-field col s4">
                <input class="waves-effect waves-light btn" type="submit" value="Enviar Formulario"/>
              </div> 
          </div>   
        </form>
    </div>
    </div>    
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
