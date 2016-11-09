<?php
/* Smarty version 3.1.30, created on 2016-11-02 04:34:55
  from "C:\xampp\htdocs\CPWEB\templates\privilegio_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58195edfd61456_35897083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1059fb91a8569e0d16f3300d317a03a425dfd75b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\privilegio_alta.html',
      1 => 1478056741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_58195edfd61456_35897083 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../image/iconHotel.png"> 

    <!--hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="../css/main.css" > 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

    <title>FORMULARIO PRIVILEGIO</title>
  </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">  
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             
      
                <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                  <h1>EDICION DE PRIVILEGIO</h1>     
                  <?php } else { ?>
                  <h1>NUEVO PRIVILEGIO</h1>
                <?php }?>
                <br>
          </div>          

          <div class="formulario ">
              <h1>Formulario privilegio </h1>
                
                <form class="form-horizontal" method="POST" action="privilegio.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>guardar<?php } else { ?>alta<?php }?>">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">PRIVILEGIO</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="privilegio" <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['privilegio']->value['privilegio'];?>
"<?php }?> >
                      </div>
                    </div>

                    
                    <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                        <input type="hidden" name="id_privilegio" value="<?php echo $_smarty_tpl->tpl_vars['id_privilegio']->value;?>
"> <?php }?>
                    
                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="Añadir"></p>
                      </div>
                    </div>
                </form>
            </div>
              <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
        </div>
         <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>       
</html>
<?php }
}
