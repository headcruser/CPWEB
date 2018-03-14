{extends file='file:layout/adminTemplate.html'}
{block name=title}<title>Crear nuevo Usuario </title>{/block}
{block name=content}
<div class="container">
    <form class="form-horizontal" method="POST" action="{router nombreRuta="$routerPrefix.create"}" enctype="multipart/form-data">
        <legend class="text-center">Crear Usuario</legend>
        {include file='./form.tpl'}
    </form>
</div>
{/block}