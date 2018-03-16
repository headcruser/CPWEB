<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Razon Social</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Escribe una Razón Social" required  name="razon_social" {if isset($item)} value="{$item->razon_social}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">RFC</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Escribe un RFC" required minlength="9" name="rfc" {if isset($item)} value="{$item->rfc}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Domicilio</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Escribe un Domicilio" required name="domicilio" {if isset($item)} value="{$item->domicilio}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Correo</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="Escribe un correo Electrónico" required  name="correo" {if isset($item)} value="{$item->correo}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" data-minlength="10" placeholder="Escribe un numero Telefonico" required name="telefono" {if isset($item)} value="{$item->telefono}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">TIPO CLIENTE</label>
    <div class="col-sm-10">
        <select class="form-control" name="id_tipo" >
            {foreach from=$params['tipo'] item=tipo key = id}
                <option value={$id} {if isset($item)} {if $item->id_tipo eq $id} selected {/if} {/if} >
                        {$tipo}</option>
            {/foreach}
        </select>
    </div>
</div>


<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">ESTADO</label>
    <div class="col-sm-10">
        <select class="form-control" name="id_estado" >
            {foreach from=$params['estado'] item=estado key = id}
                <option value={$id} {if isset($item)} {if $item->id_estado eq $id} selected {/if} {/if} >
                        {$estado}</option>
            {/foreach}
        </select>
    </div>
</div>


<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">USUARIO</label>
    <div class="col-sm-10">
        <select class="form-control" name="id_usuario" >
            {foreach from=$params['usuario'] item=usuario key = id}
                <option value={$id} {if isset($item)} {if $item->id_usuario eq $id} selected {/if} {/if} >
                        {$usuario}</option>
            {/foreach}
        </select>
    </div>
</div>


<div class="center-block">
    <input class="btn btn-primary" type="submit" value="Guardar">
    <a href="{router nombreRuta="$routerPrefix.index"}" class="btn btn-default"><i class="far fa-arrow-alt-circle-left"></i> Cancelar</a>
</div>



