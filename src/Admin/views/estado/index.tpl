{extends file='file:layout/adminTemplate.html'}
{block name=styles}
    <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}jquery-confirm.min.css">
{/block}
{block name=script}
     <script src="{$smarty.const.JS}jquery-confirm.min.js"></script>
     <script src="{$smarty.const.JS}dialog.js"></script>
{/block}
{block name=title}<title> Listado Estados</title>{/block}
{block name=content}
    <a href="{router nombreRuta="$routerPrefix.create"}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Crear Tipo Cliente</a>

    <table class="table table-condensed">
        <caption class="text-center">Estados de la Republica</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>ESTADO</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        {foreach $items as $item}
        <tr>
            <td>{$item->id_estado}</td>
            <td>{$item->descripcion}</td>
            <td>
                <a href="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_estado]}"
                 class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                <form style="display:inline"
                    action="{router nombreRuta="$routerPrefix.delete" parametros=['id'=>$item->id_estado]}"
                    method="POST" onsubmit="confirm('Deseas eliminar el registro')">
                <input type="hidden" name="_METHOD" value="DELETE">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>
        {/foreach}
        </tbody>
    </table>

    <div class="center-block">
        <div class="container">
            {pagination route="$routerPrefix.index" elements=$items}
        </div>
    </div>
{/block}