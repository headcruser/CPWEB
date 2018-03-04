{extends file='file:layout/adminTemplate.html'}
{block name=styles}
    <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}jquery-confirm.min.css">
{/block}
{block name=script}
     <script src="{$smarty.const.JS}jquery-confirm.min.js"></script>
     <script src="{$smarty.const.JS}dialog.js"></script>
{/block}
{block name=title}<title> Listado Clientes</title>{/block}
{block name=content}

<div class="container">

    {if {flash type='success'}}
        <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>!</strong> {flash type='success'}
        </div>
    {/if}


    <table class="table table-condensed">
        <caption class="text-center">Clientes</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Razon Social</th>
                <th>RFC</hd>
                <th>Domicilio</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        {foreach $items as $item}
        <tr>
            <td>{$item->id_cliente}</td>
            <td>{$item->razon_social}</td>
            <td>{$item->rfc}</td>
            <td>{$item->domicilio}</td>
            <td>{$item->correo}</td>
            <td>{$item->telefono}</td>
            <td>
                <a href="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_cliente]}"
                 class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                <form style="display:inline"
                    action="{router nombreRuta="$routerPrefix.delete" parametros=['id'=>$item->id_cliente]}"
                    method="POST" onsubmit="confirm('Deseas eliminar el registro')">
                <input type="hidden" name="_METHOD" value="DELETE">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>
        {/foreach}
        </tbody>
    </table>
    <a href="{router nombreRuta="$routerPrefix.create"}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Crear cliente</a>

    <div class="center-block">
        <div class="container">
            {pagination route="$routerPrefix.index" elements=$items}
        </div>
    </div>
    {$viewPrefix}
    {$routerPrefix}
</div>
{/block}