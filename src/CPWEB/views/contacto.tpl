{extends file='file:layout/page.html'}
{block name=title}<title>CONTACTO</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='./header_publico.tpl'} {/block}
{block name=content}
<div class="contenedor">
  <section>
  <h1>contactanos</h1>

  <div class="formulario ">
    <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="Nombre"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="correo"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" name="telefono"  >
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <textarea name="comentario" class="form-control" rows="8" cols="40"></textarea>
            </div>
          </div>

            <input type="submit" name="enviar" value="enviar">
    </form>
  </div>
    <p>
      CONOZCA LO MEJOR EN SERVICIOS INTEGRALES DE CONTABILIDAD EN GUANAJUATO! En Contadores CPWEB  de Celaya – Guanajuato estamos para atender todas sus necesidades en el área fiscal, de auditoría y contable en México. Contáctenos con gusto atenderemos todas sus preguntas e inquietudes:
    </p>

  </section>
  <aside id="bienvenida">
    <div >
      <div >
        <h2>Contactanos</h2><br>
        <p>
          <img src="{$smarty.const.IMG}contacto.jpg" height="150" width="220" />
        </p>

      </div>
    </div>
  </aside>
</div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}