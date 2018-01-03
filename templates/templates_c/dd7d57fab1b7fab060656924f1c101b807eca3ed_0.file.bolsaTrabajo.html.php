<?php
/* Smarty version 3.1.30, created on 2018-01-03 22:53:45
  from "C:\xampp2\htdocs\CPWEB\templates\publico\bolsaTrabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d50e9d42352_08016071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7d57fab1b7fab060656924f1c101b807eca3ed' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\publico\\bolsaTrabajo.html',
      1 => 1515016422,
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
function content_5a4d50e9d42352_08016071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17548285515a4d50e9d3bb66_90704159', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11097217725a4d50e9d3cef5_41817167', 'icon');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5856431375a4d50e9d3ee35_14251676', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10178893035a4d50e9d40232_09946690', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20838850555a4d50e9d41c59_77294569', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_17548285515a4d50e9d3bb66_90704159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<title>ALIANZAS</title><?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_11097217725a4d50e9d3cef5_41817167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_5856431375a4d50e9d3ee35_14251676 extends Smarty_Internal_Block
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
class Block_10178893035a4d50e9d40232_09946690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contenedor">
  <section>
    <h1>Vacantes Permanentes</h1>

    <ul>
      <li>Contador Público.</li>
      <li>requisitos</li>
      <li>Analista contable.</li>
    </ul>

    <h2>REQUISITOS </h2>
    <p>
        Escolaridad: Lic. Contabilidad o a fin Pasante, Titulado o Proceso de Titulación.Experiencia mínima de 1 año, se toma en cuenta Servicio Social en despacho contable.Conocimientos básicos en contabilidad en general, proceso de cuentas por pagar y almacén.
        Manejo preferente JD Edwards o algún RP
    </p>

    <h2>Outsourcing</h2>
    <h3>Lista de puestos disponibles</h3>
    <ul>
      <li>Contador Público.</li>
      <li>Auditor.</li>
      <li>Analista contable.</li>
    </ul>

    <h2>Postulate: </h2>

    <h3>FORMULARIO</h3>
      <ul>
        <li>Nombre</li>
        <li>E-mail</li>
        <li>○ Telefonos.</li>
        <li>○ Perfil(Menu desplegable)
          <ul>
            <li>Gerente</li>
            <li>Supervisor.</li>
            <li>Analista</li>
            <li>Auditor</li>
            <li>Fiscalista</li>
            <li>Analistas de inventario</li>
          </ul>
        </li>
      </ul>

  <h2>Pasantes</h2>
  <p>
    Estudiar algunas de las carrera: Contabilidad
    Estar en proceso de de titulación
    Sexo: Indistinto
  </p>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
        <h2>Bolsa de trabajo</h2><br>
        <p>
          <img src=".\IMAGE\bolsa.jpg" height="150" width="220" />
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
class Block_20838850555a4d50e9d41c59_77294569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:publico/footer_publico.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
