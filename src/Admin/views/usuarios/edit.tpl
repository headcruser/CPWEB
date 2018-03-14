{extends file='file:layout/adminTemplate.html'}
{block name=title}<title> Editar Cliente  </title>{/block}
{block name=content}
<div class="container">
    <form class="form-horizontal" method="POST"
        action="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_usuario]}" enctype="multipart/form-data">
        <legend class="text-center">Editar Usuario</legend>
        {include file='./form.tpl'}
    </form>
</div>
{/block}