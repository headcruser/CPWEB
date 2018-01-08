<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-08 03:58:08
  from 'C:\xampp2\htdocs\CPWEB\templates\publico\index_publico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a52de40496e77_88848954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7ab5dc6f977a3aee4737395979b7f5299d5294' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\index_publico.tpl',
      1 => 1515380254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/header_publico.html' => 1,
    'file:../layout/footer.html' => 1,
  ),
),false)) {
function content_5a52de40496e77_88848954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82908815a52de40241c42_74870482', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15724985275a52de40243877_68098206', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12952591155a52de40244710_86197034', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19930059985a52de4039a385_01827829', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15414236345a52de40495222_85744803', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout/page.html");
}
/* {block 'title'} */
class Block_82908815a52de40241c42_74870482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_82908815a52de40241c42_74870482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title> CPWEB Y ASOCIADOS </title>
<?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_15724985275a52de40243877_68098206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'icon' => 
  array (
    0 => 'Block_15724985275a52de40243877_68098206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_12952591155a52de40244710_86197034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12952591155a52de40244710_86197034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:publico/header_publico.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_19930059985a52de4039a385_01827829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19930059985a52de4039a385_01827829',
  ),
);
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
class Block_15414236345a52de40495222_85744803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15414236345a52de40495222_85744803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
