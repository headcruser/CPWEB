<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputName" placeholder="Escribe un E-mail" required  name="email" {if isset($item)} value="{$item->email}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputName" placeholder="Escribe una contraseña" required minlength="9" name="contrasena" {if isset($item)} value="{$item->contrasena}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Escribe un nombre" required name="nombres" {if isset($item)} value="{$item->nombres}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Escribe tus apellidos" required  name="apellidos" {if isset($item)} value="{$item->apellidos}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" data-minlength="10" placeholder="Escribe un numero Telefonico" required name="nacimiento" {if isset($item)} value="{$item->nacimiento}"{/if} >
    </div>
</div>

<div class="form-group">
    <label for="foto" class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" id="foto" name="foto" multiple accept=".jpg , .png">
    </div>
</div>

{if isset($item)}
    <div class="form-group">
        <div class="text-center">
            <img class="img-thumbnail rounded mx-auto d-block"
             src="{if isset($item)}{$item->getThumb()}{/if}" alt="foto de usuario" >
        </div>
    </div>
{/if}

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <input class="btn btn-primary btn-lg" type="submit" value="Guardar">
        <a href="{router nombreRuta="$routerPrefix.index"}" class="btn btn-default btn-lg"><i class="far fa-arrow-alt-circle-left"></i> Cancelar</a>
    </div>
    <div class="col-md-4"></div>
</div>