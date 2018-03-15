{extends file='file:layout/adminTemplate.html'}
{block name=title}<title>Crear nuevo cliente </title>{/block}
{block name=content}
<form class="form-horizontal" method="POST" action="{router nombreRuta="$routerPrefix.create"}">
    <legend class="text-center">Crear Cliente</legend>
    {include file='./form.tpl'}
</form>
{/block}
