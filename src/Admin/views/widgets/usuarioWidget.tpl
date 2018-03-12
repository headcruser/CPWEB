<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">USUARIOS</h3>
    </div>
    <div class="panel-body text-center">
    <h4 class="card-title">{if isset($noUsuarios)} {$noUsuarios}{else}0{/if}</h4>
    <p class="card-text"> Usuarios</p>
      <a  class=" text-center btn btn-primary" href="{router nombreRuta="admin.usuarios.index"}">IR A USUARIOS</a>
    </div>
  </div>
</div>
