<?php
  include('cp_web_class.php');
  $web=new Cpweb;
  $templates=$web->template();
  $templates->display('publico/contabilidad.html'); // llama a la vista
 ?>
