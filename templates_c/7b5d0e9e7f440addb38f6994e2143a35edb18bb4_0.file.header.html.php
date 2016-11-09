<?php
/* Smarty version 3.1.30, created on 2016-11-01 05:24:26
  from "C:\xampp\htdocs\CPWEB\templates\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581818fa9f7c56_16592386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5d0e9e7f440addb38f6994e2143a35edb18bb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CPWEB\\templates\\header.html',
      1 => 1477972987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581818fa9f7c56_16592386 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous">        
      <?php echo '</script'; ?>
>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- header  Cpweb -->
<header>
  <div id="enlaces">
    <a href="en">English version </a>
  </div>

  <!--logotipos -->
  <div id="logo">
    <!--Agrega una imagen -->
    <img src="../image/cpwebPortada.png" />
  </div>

    <nav class="navbar navbar-light bg-faded" style="background-color: #ECF0F1;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"  style="background-color: #ECF0F1;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">CPWEB</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav"  style="background-color: #ECF0F1;">
            <li><a href="#">Otros</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogo <span class="caret"></span></a>
              <ul class="dropdown-menu">
              
                <li><a href="clientes.php">Ir a Clientes</a></li>
                <li><a href="estados.php">Ir a Entidad Federativa</a></li>
                <li><a href="tipo.php">Ir a Tipo de Clientes</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="reporte.php">Visualizar Reporte</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar Tabla">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php?accion=logout">Cerrar Sesion</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="usuario.php">Usuario</a></li>
                <li><a href="rol.php">Rol</a></li>
                <li><a href="privilegio.php">Privilegio</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</header>
  

<?php }
}
