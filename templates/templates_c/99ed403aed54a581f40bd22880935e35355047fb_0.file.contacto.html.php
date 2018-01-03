<?php
/* Smarty version 3.1.30, created on 2018-01-03 22:58:34
  from "C:\xampp2\htdocs\CPWEB\templates\publico\contacto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d520a8b28e2_81170237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ed403aed54a581f40bd22880935e35355047fb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\contacto.html',
      1 => 1515016711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/page.html' => 1,
    'file:publico/header_publico.html' => 1,
    'file:publico/footer_publico.html' => 1,
  ),
),false)) {
function content_5a4d520a8b28e2_81170237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13852994235a4d520a8ac1a2_32553776', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7344315405a4d520a8ad554_67389816', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14143209985a4d520a8af469_97378384', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8151588985a4d520a8b0876_42822611', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3693264535a4d520a8b21e9_31470094', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_13852994235a4d520a8ac1a2_32553776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>CONTACTO</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_7344315405a4d520a8ad554_67389816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_14143209985a4d520a8af469_97378384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:publico/header_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_8151588985a4d520a8b0876_42822611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor">
  <section>
  <h1>contactanos</h1>

  <div class="formulario ">
    <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="Nombre"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="correo"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" name="telefono"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <textarea name="comentario" class="form-control" rows="8" cols="40"></textarea>
            </div>
          </div>

            <input type="submit" name="enviar" value="enviar">
    </form>
  </div>
    <p>
      CONOZCA LO MEJOR EN SERVICIOS INTEGRALES DE CONTABILIDAD EN GUANAJUATO! En Contadores CPWEB  de Celaya – Guanajuato estamos para atender todas sus necesidades en el área fiscal, de auditoría y contable en México. Contáctenos con gusto atenderemos todas sus preguntas e inquietudes:
    </p>

  </section>
  <aside id="bienvenida">
    <div >
      <div >
        <h2>Contactanos</h2><br>
        <p>
          <img src=".\IMAGE\contacto.jpg" height="150" width="220" />
        </p>

      </div>
    </div>
  </aside>
</div>  <!--Fin del contenedor-->
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3693264535a4d520a8b21e9_31470094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
