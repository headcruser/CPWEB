{extends file='./layout.tpl'}
{block name=styles}
<link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}jquery-confirm.min.css">
{/block}
{block name=script}
     <script src="{$smarty.const.JS}jquery-confirm.min.js"></script>
     <script src="{$smarty.const.JS}dialog.js"></script>
{/block}
{block name=title}<title> Listado Clientes</title>{/block}
{block name=content}
 {if $flash->isExistMessage('success')}
    <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>!</strong> {$flash->get('success')}
    </div>
 {/if}
<a href="{$router->generateUri('admin.clientes.create')}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Crear cliente</a>
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
     {foreach $clientes as $cliente}
     <tr>
        <td>{$cliente->id_cliente}</td>
        <td>{$cliente->razon_social}</td>
        <td>{$cliente->rfc}</td>
        <td>{$cliente->domicilio}</td>
        <td>{$cliente->correo}</td>
        <td>{$cliente->telefono}</td>
        <td>
            <a href="{$router->generateUri('admin.clientes.edit',['id'=>$cliente->id_cliente])}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
            <form style="display:inline" action="{$router->generateUri('admin.clientes.delete',['id'=>$cliente->id_cliente])}"
            method="POST" onsubmit="confirm('Deseas eliminar el registro')">
            <input type="hidden" name="_METHOD" value="DELETE">
            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>

    </tr>
    {/foreach}
     </tbody>
 </table>
 {$html}

 {date_now}

{* or to format differently *}
{date_now format="%Y/%m/%d"}

{/block}