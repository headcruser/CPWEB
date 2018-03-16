{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> Editar Tipo  </title>{/block}
{block name=content}
<form class="form-horizontal" method="POST"
    action="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_tipo]}" enctype="multipart/form-data">
    <legend class="text-center">Editar Tipo Cliente</legend>
    {include file='./form.tpl'}
</form>
{/block}