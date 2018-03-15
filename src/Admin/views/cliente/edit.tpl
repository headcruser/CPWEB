{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> Editar Cliente  </title>{/block}
{block name=content}
<form class="form-horizontal" method="POST"
    action="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_cliente]}">
    <legend class="text-center">Editar Cliente</legend>
    {include file='./form.tpl'}
</form>
{/block}