<?php
/* Smarty version 3.1.30, created on 2016-11-11 08:27:16
  from "C:\xampp\htdocs\CPWEB\templates\header_privilegios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582572d426bd60_74064151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48ffe26bcef81a62afd2e2710de8c5e4a034e143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\header_privilegios.html',
      1 => 1478849232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582572d426bd60_74064151 (Smarty_Internal_Template $_smarty_tpl) {
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
          <a class="navbar-brand" href="index.php">CPWEB</a>
        </div>

        <!-- Inicia el menu-->
        <div class="collapse navbar-collapse" id="menu-navegacion">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php">Ir a Página Principal</a></li>

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Contadores <span class="caret"></span>
              </a>
                <!-- SubMenu -->
                <ul class="dropdown-menu" role="menu">
                    <li><a href="clientes.php">Ir a Clientes</a></li>
                    <li><a href="estados.php">Ir a Entidad Federativa</a></li>
                    <li><a href="tipo.php">Ir a Tipo de Clientes</a></li>


                  <li role="separator" class="divider"></li>
                  <li><a href="reporte.php">Visualizar Reporte</a></li>
                </ul>
            </li>
            <?php }?>
          <?php }?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador" || $_smarty_tpl->tpl_vars['privilegio']->value == "login") {?>
              <li><a href="login.php?accion=logout">Cerrar Sesion</a></li>
              <?php } else { ?>
                <li><a href="login.php">Iniciar sesion</a></li>
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
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador" || $_smarty_tpl->tpl_vars['privilegio']->value == "login") {?>
              <li><a href="perfil.php">Mi perfil</a></li>
              <?php }?>
            <?php }?>
          </ul>

      </div>  <!--Fin del menu-->
    </nav>
</header>
<?php }
}
