<?php
/* Smarty version 3.1.30, created on 2018-01-03 22:44:53
  from "C:\xampp2\htdocs\CPWEB\templates\publico\index_publico.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d4ed51e9627_73532386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ae7529a6f0cfbcb458e8097474400e84ebca6f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\index_publico.html',
      1 => 1515015888,
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
function content_5a4d4ed51e9627_73532386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439407215a4d4ed51cc088_00229378', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4940855855a4d4ed51cdc63_85131449', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7629326165a4d4ed51d76e8_21371943', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_798588355a4d4ed51e6343_53874681', 'content');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11446811655a4d4ed51e8bb7_22479663', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_439407215a4d4ed51cc088_00229378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title> CPWEB Y ASOCIADOS </title>
<?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_4940855855a4d4ed51cdc63_85131449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_7629326165a4d4ed51d76e8_21371943 extends Smarty_Internal_Block
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
class Block_798588355a4d4ed51e6343_53874681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="contenedor">
      <section>
        <h1>HISTORIA</h1>
        <article>
          <p>
            CP Web comienza operaciones el año de 2016 en México,
            fundada por profesionistas independientes en respuesta a las demanda
            del mercado por Servicios Contables Integrales para cubrir bajo un
            solo punto de contacto todas las necesidades de sus clientes en
            Auditoría contable, Asesoría, Contabilidad, Asuntos Fiscales y
            Consultoría Financiera.
          </p>
          <p>
            Nuestra empresa tiene como principal enfoque brindarle atención
            especializada en todos Nuestros Servicios a los costos más
            competitivos. Nuestro grupo de fiscalistas y contadores, altamente
            especializado en materia fiscal, cuenta con
            la experiencia y profundo conocimiento de las leyes fiscales para
            garantizar la calidad de todos nuestros servicios y confiabilidad de
            nuestros resultados. Nuestra empresa funciona en base a la filosofía
            de mejora continua en el servicio para satisfacer todas las necesidades
            de nuestros clientes y hacer frente a los constantes cambiosde las leyes
            fiscales y laborales.
          </p>
          <p>
            Nuestra empresa actualmente tiene destacada presencia en las ciudades de Guanajuato, Celaya y Querétaro en México con alcance
            en toda la República Mexicana
          </p>
        </article>
      </section>

      <aside id="bienvenida">
        <h2>Información</h2>
        <div class="container-fluid">
          <img src="<?php echo @constant('IMG');?>
autor.jpg" />
        </div>
        <div class="center-block">
          <p>
            <strong>
              Bienvenido a nuestro sitio Web en donde podrá obtener un servicio de calidad, debido a nuestas certificaciones ISO-9000
            </strong>
          </p>
        </div>

        <div class="container-fluid">
          <h3>Atencion a clientes</h3>
          <img class="img-responsive" alt="Responsive image" src="<?php echo @constant('IMG');?>
atencion.jpg" />
        </div>

      </aside>
    </div>
  </div>
  <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_11446811655a4d4ed51e8bb7_22479663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
