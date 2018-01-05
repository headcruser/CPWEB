<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-05 19:31:26
  from 'C:\xampp2\htdocs\CPWEB\templates\publico\index_publico.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4fc47ee6a4e6_97141558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ae7529a6f0cfbcb458e8097474400e84ebca6f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\index_publico.html',
      1 => 1515177006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/header_publico.html' => 1,
    'file:../layout/footer.html' => 1,
  ),
),false)) {
function content_5a4fc47ee6a4e6_97141558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10887512365a4fc47ee57a16_10240416', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11955903355a4fc47ee59114_34805881', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10368947535a4fc47ee59ec2_64741813', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14976878965a4fc47ee60216_88849787', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18454452215a4fc47ee69157_24274062', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout/page.html");
}
/* {block 'title'} */
class Block_10887512365a4fc47ee57a16_10240416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10887512365a4fc47ee57a16_10240416',
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
class Block_11955903355a4fc47ee59114_34805881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'icon' => 
  array (
    0 => 'Block_11955903355a4fc47ee59114_34805881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_10368947535a4fc47ee59ec2_64741813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10368947535a4fc47ee59ec2_64741813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:publico/header_publico.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_14976878965a4fc47ee60216_88849787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14976878965a4fc47ee60216_88849787',
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
class Block_18454452215a4fc47ee69157_24274062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18454452215a4fc47ee69157_24274062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../layout/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
