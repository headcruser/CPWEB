<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName" placeholder="Escribe un E-mail" required  name="descripcion" {if isset($item)} value="{$item->descripcion}"{/if} >
    </div>
</div>

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <input class="btn btn-primary btn-lg" type="submit" value="Guardar">
        <a href="{router nombreRuta="$routerPrefix.index"}" class="btn btn-default btn-lg"><i class="far fa-arrow-alt-circle-left"></i> Cancelar</a>
    </div>
    <div class="col-md-4"></div>
</div>