{extends file='file:layout/adminTemplate.html'}
{block name=styles}
    <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}jquery-confirm.min.css">
{/block}
{block name=script}
     <script src="{$smarty.const.JS}jquery-confirm.min.js"></script>
     <script src="{$smarty.const.JS}dialog.js"></script>
{/block}
{block name=title}<title> Listado Usuarios s</title>{/block}
{block name=content}
    <a href="{router nombreRuta="$routerPrefix.create"}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Crear Usuario</a>

    <table class="table table-condensed">
        <caption class="text-center">Usuario</caption>
        <thead>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Nombres</th>
                <th>apellidos</th>
                <th>Nacimiento</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        {foreach $items as $item}
        <tr>
            <td>{$item->id_usuario}</td>
            <td>{$item->email}</td>
            <td>{$item->nombres}</td>
            <td>{$item->apellidos}</td>
            <td>{$item->nacimiento}</td>
            <td>
                <a href="{router nombreRuta="$routerPrefix.edit" parametros=['id'=>$item->id_usuario]}"
                 class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                <form style="display:inline"
                    action="{router nombreRuta="$routerPrefix.delete" parametros=['id'=>$item->id_usuario]}"
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