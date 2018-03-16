{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> Editar Estado  </title>{/block}
{block name=content}
<form class="form-horizontal" method="POST"
    action="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_estado]}" enctype="multipart/form-data">
    <legend class="text-center">Editar Estado</legend>
    {include file='./form.tpl'}
</form>
{/block}