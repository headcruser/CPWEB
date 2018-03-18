{extends file='file:layout/adminTemplate.html'}
{block name=styles}{/block}
{block name=script}{/block}
{block name=title}<title> Iniciar Sesión</title>{/block}
{block name=content}
{* {router nombreRuta="$routerPrefix.create"} *}
<div class="col-md-4"></div>
<div class="col-md-4 border">
  <form method="post" enctype="application/x-www-form-urlencoded" action="#">
    <legend class="text-center"> INICIO DE SESIÓN</legend>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" autofocus>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Recuerdame
      </label>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Acceder</button>
  </form>
</div>
<div class="col-md-4"></div>
{/block}