<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}css/flat.css" >
      <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}bootstrap/bootstrap.css" >
      <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}main.css" >

</head>
<body>

  <div id="wrapper">
    {$header}

        {if isset($mensaje)}
          <div class="media">
                <div class="alert alert-danger" role="alert">
                <strong> ERROR:</strong>
                {$mensaje}
                </div>
            </div>
        {/if}


        {if isset($msg)}
          <div class="media">
            <div class="alert alert-success" role="alert">
            <strong> Perfecto ¡¡:</strong>
            {$msg}
            </div>
          </div>
          {/if}

      <div class="formulario ">

        {if isset($titulo)}
                  <h1>{$titulo}</h1>
                  {else}
                  <h1>Login</h1>
                {/if}
            <form class="form-horizontal" method="POST" action="login.php?accion=login" data-toggle="validator" role="form">

                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">EMAIL</label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Ingresa tu Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">CONTRASEÑA</label>
                  <div class="col-sm-10">
                      <input type="password" minlength="3" class="form-control"  id="inputPassword" name="contrasena"  placeholder="Ingresa tu contraseña" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="enviar">
                          <p> <input class="btn btn-primary btn-lg active" type="submit" value="INGRESAR"></p>
                  </div>
                </div>

              <a href="forgot.php">¿Olvidaste tu contraseña </a>
          </form>
      </div>
       {include file='../layout/footer.html'}
      <script src="{$smarty.const.JS}jquery.js"></script>
      <script src="{$smarty.const.JS}bootstrap/bootstrap.js"></script>
      <script src="{$smarty.const.JS}jquery.validate.js"></script>

  </div>
</body>
</html>
