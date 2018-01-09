{extends file='file:layout/page.html'}
{block name=title}<title>NOMINA</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='./header_publico.tpl'} {/block}
{block name=content}
<div class="contenedor">
  <section>
    <h1>  ¿Qué es una nómina?</h1>
      <p>
        Una nómica es el registro financiero que una empresa realiza sobre los salarios de sus empleados, bonificaciones y deducciones
      </p>
  </section>
  <aside id="bienvenida">
    <div >
      <div >
        <h2>Nomina</h2><br>
        <p>
          <img src="{$smarty.const.IMG}nomina.jpg" height="150" width="220" />
        </p>

      </div>
    </div>
  </aside>
</div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}