<?php
/* Smarty version 3.1.30, created on 2016-11-02 01:18:05
  from "C:\xampp\htdocs\CPWEB\templates\clientes_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581930bd5e7cf5_45231556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786542deb66c69eef40c51d0401ba8245c4285e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\clientes_alta.html',
      1 => 1478045779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_581930bd5e7cf5_45231556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
          <!-- Pone un icono en la pestaña -->
          <link rel="shortcut icon" href="../image/iconHotel.png"> 
          <link rel="stylesheet" type="text/css" href="../css/main.css" > 
          <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" >

        <title>FORMULARIO CLIENTE</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">  
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             
      
                <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>
                  <h1>EDICION DE CLIENTE</h1>     
                  <?php } else { ?>
                  <h1>NUEVO CLIENTE</h1>
                <?php }?>
                <br>
          </div>          

          <div class="formulario ">
              <h1>Formulario cliente </h1>
                
                <form class="form-horizontal" method="POST" action="clientes.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>guardar<?php } else { ?>alta<?php }?>">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Razon Social</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="razon_social" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['razon_social'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">RFC</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="rfc" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['rfc'];?>
"<?php }?> >
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Domicilio</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="domicilio" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['domicilio'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="correo" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['correo'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="telefono" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
"<?php }?> >
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Persona Fisica/Moral</label>
                      <div class="col-sm-10">
                          <?php echo $_smarty_tpl->tpl_vars['combo']->value;?>

                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Entidad Federativa</label>
                      <div class="col-sm-10">
                          <?php echo $_smarty_tpl->tpl_vars['comboEstado']->value;?>

                      </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>
                        <input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['id_cliente']->value;?>
"> <?php }?>
                    
                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="INGRESAR"></p>
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
