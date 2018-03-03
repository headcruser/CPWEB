{extends file='./layout.tpl'}
{block name=title}<title> Editar Informacion  </title>{/block}
{block name=content}
<div class="container">
    <form class="form-horizontal" method="POST"
        action="{router nombreRuta='admin.clientes.edit' parametros=['id'=>$cliente->id_cliente]}">
        <legend class="text-center">Editar Cliente</legend>
        {include file='./form.tpl'}
    </form>
</div>
{/block}