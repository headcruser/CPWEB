<?php
/* Smarty version 3.1.30, created on 2016-11-09 06:48:36
  from "C:\xampp\htdocs\CPWEB\templates\publico\header_publico.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822b8b4d36b17_98934376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '501593527a00b59f9c0ead734169692ab1fea01e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\publico\\header_publico.html',
      1 => 1478663135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5822b8b4d36b17_98934376 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
          <div id="enlaces">
              <a href="en">English version </a>
            </div>

            <!-- Portada CPWEB -->
            <div id="logo">
              <img src=".\image\CPWEB.png" />
            </div>

            <div class="navegacion">
                <nav class="barra">
                  <ul>
                    <li><a href="index.php"><span class="primero"><i class="icon icon-home"></i></span>Home</a></li>
                    <li><a href="quienes.php"><span class="segundo"><i class="icon icon-acerca"></i></span>Quienes Somos</a></li>
                    <li><a href="#"><span class="tercero"><i class="icon icon-servicio"></i></span>Servicios</a>
                      <ul>
                        <li><a href="contabilidad.php">Contabilidad</a></li>
                        <li><a href="nomina.php">Nomina</a></li>
                        <li><a href="auditoria.php">Auditoria</a></li>
                        <li><a href="asesoriaLegal.php">Asesoria Legal</a></li>
                        <li><a href="planeacionFinanciera.php">Planeacion Financiera</a></li>
                      </ul>
                    </li>
                    <li><a href="alianzas.php"><span class="cuarto"><i class="icon icon-alianza"></i></span>Alianzas</a></li>
                    <li><a href="bolsaTrabajo.php"><span class="quinto"><i class="icon icon-bolsa"></i></span>Bolsa de Trabajo</a></li>
                    <li><a href="admin/index.php"><span class="sexto"><i class="icon icon-sesion"></i></span>Iniciar Sesion</a></li>
                    <li><a href="contacto.php"><span class="septimo"><i class="icon icon-contacto"></i></span>Contacto</a></li>
                </ul>
              </nav>
          </div>
      </header>
<?php }
}
