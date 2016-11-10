<?php
  include('../cp_web_class.php');
  $web=new Cpweb;
  //$web->checarAcceso("Login"); // policia
  $SQL="select foto from usuario where id_usuario=".$_SESSION["id_usuario"];
  $statement=$web->conn->Prepare($SQL);
  $statement->execute();
  $statement->bindColumn(1,$image,PDO::PARAM_LOB);
  $statement->fetch(PDO::FETCH_BOUND);
  header("Content-Type: image");

  echo $image;
 ?>
