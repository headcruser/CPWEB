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
        <input type="number" class="form-control" id="inputName" data-minlength="10" placeholder="Escribe un numero Telefonico" required name="telefono" {if isset($item)} value="{$item->telefono}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">id_tipo</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName" data-minlength="10" placeholder="ID Usuario" required name="id_tipo"  {if isset($item)} value="{$item->id_tipo}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">id_estado</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName" data-minlength="10" placeholder="ID Usuario" required name="id_estado"  {if isset($item)} value="{$item->id_estado}"{/if}  >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">id_usuario</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="inputName" data-minlength="10" placeholder="ID Usuario" required name="id_usuario"  {if isset($item)} value="{$item->id_usuario}"{/if}>
    </div>
</div>
<div class="center-block">
    <input class="btn btn-primary" type="submit" value="Guardar">
    <a href="{router nombreRuta="$routerPrefix.index"}" class="btn btn-default"><i class="far fa-arrow-alt-circle-left"></i> Cancelar</a>
</div>