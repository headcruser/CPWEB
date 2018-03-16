<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">TIPO CLIENTES</h3>
    </div>
    <div class="panel-body text-center">
    <h4 class="card-title">{if isset($noTipo)} {$noTipo}{else}0{/if}</h4>
    <p class="card-text"> TIPOS</p>
      <a  class=" text-center btn btn-primary" href="{router nombreRuta="admin.tipo.index"}">IR A TIPOS</a>
    </div>
  </div>
</div>
