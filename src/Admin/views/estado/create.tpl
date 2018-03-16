{extends file='file:layout/adminTemplate.html'}
{block name=title}<title>Crear nueva Entidad Federativa</title>{/block}
{block name=content}
    <form class="form-horizontal" method="POST" action="{router nombreRuta="$routerPrefix.create"}" enctype="multipart/form-data">
        <legend class="text-center">Crear Estado</legend>
        {include file='./form.tpl'}
    </form>
{/block}