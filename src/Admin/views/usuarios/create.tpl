{extends file='file:layout/adminTemplate.html'}
{block name=title}<title>Crear nuevo cliente </title>{/block}
{block name=content}
<h2> Crear Cliente</h2>
<form  method="POST" action="{router nombreRuta="$routerPrefix.create"}">
    {include file='./form.tpl'}
</form>
{/block}