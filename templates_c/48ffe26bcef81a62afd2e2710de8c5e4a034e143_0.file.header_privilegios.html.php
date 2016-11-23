<?php
/* Smarty version 3.1.30, created on 2016-11-20 05:34:31
  from "C:\xampp\htdocs\CPWEB\templates\header_privilegios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583127d7a65540_43417524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48ffe26bcef81a62afd2e2710de8c5e4a034e143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\header_privilegios.html',
      1 => 1479616469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583127d7a65540_43417524 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header privilegios -->
<header>
  <div id="enlaces">
    <a href="en">English version </a>
  </div>

  <!--logotipos -->
  <div id="logo">
    <!--Agrega una imagen -->
    <img src="../image/CPWEB.png" />
  </div>

    <!-- Menu de navegación -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navegacion" aria-expanded="false">
            <span class="sr-only">Desplegar / Ocultar menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Titulo de la pagina web -->
          <img src="../image/iconHotel.png"/>
          <a class="navbar-brand" href="../index.php">CPWEB</a>
        </div>

        <!-- Inicia el menu-->
        <div class="collapse navbar-collapse" id="menu-navegacion">
          <ul class="nav navbar-nav">

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
            <li ><a href="../admin/index.php">Inicio</a></li>
            <?php } else { ?>
                <li ><a href="index.php">Inicio</a></li>
            <?php }?>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              Servicios <span class="caret"></span>
            </a>
              <!-- SubMenu -->
              <ul class="dropdown-menu" role="menu">
                  <li><a href="../admin/cotizacion_detalle.php">Cotizaciones</a></li>
              </ul>
          </li>
          <?php }?>

        <!-- Seccion Servicios -->
            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador") {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Catálogo <span class="caret"></span>
              </a>
                <!-- SubMenu -->
                <ul class="dropdown-menu" role="menu">
                    <li><a href="clientes.php">Ir a Clientes</a></li>
                    <li><a href="estados.php">Ir a Entidad Federativa</a></li>
                    <li><a href="tipo.php">Ir a Tipo de Clientes</a></li>


                  <li role="separator" class="divider"></li>
                  <li ><a href="../admin/servicio.php">Servicios</a></li>
                  <li><a href="reporte.php">Visualizar Reporte</a></li>
                </ul>
            </li>
            <?php }?>
          <?php }?>


            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador") {?>
            <li><a href="cotizacion.php">Ver cotizaciones</a></li>
            <?php }?>
          <?php }?>

        </ul>     <!-- fin de la barra derecha -->

          <ul class="nav navbar-nav navbar-right">

            <!-- INDICA SI EL USUARIO QUIERE INICIAR SESION-->
            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
              <li><a href="login.php?accion=logout">Cerrar Sesion</a></li>
              <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "login") {?>
                <li><a href="login.php">Iniciar Sesion</a></li>
                <?php }?>
              <?php }?>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
              <li><a href="../admin/login.php?accion=logout">Cerrar Sesion</a></li>
              <?php }?>
            <?php }?>




            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
              <ul class="dropdown-menu">

                    <li><a href="usuario.php">Usuario</a></li>
                    <li><a href="rol.php">Rol</a></li>
                    <li><a href="privilegio.php">Privilegio</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="rol_privilegio.php">Rol Privilegio</a></li>
                    <li><a href="usuario_rol.php">Usuario Rol</a></li>
              </ul>
            </li>
            <?php }?>
          <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
              <li><a href="perfil.php">Mi perfil</a></li>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
                    <li><a href="../admin/perfil.php">Mi perfil</a></li>
                    <?php }?>
              <?php }?>
            <?php }?>
          </ul>

      </div>  <!--Fin del menu-->
    </nav>
</header>
<?php }
}
