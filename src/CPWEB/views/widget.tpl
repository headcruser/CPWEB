<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">CLIENTES</h3>
    </div>
    <div class="panel-body text-center">
    <h4 class="card-title">{if isset($noClientes)} {$noClientes}{else}0{/if}</h4>
    <p class="card-text"> Clientes</p>
      <a  class=" text-center btn btn-primary" href="{router nombreRuta="admin.clientes.index"}">IR A CLIENTES</a>
    </div>
  </div>
</div>
