{extends file="../layout/page.html"}
{block name=title}<title>ALIANZAS</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='publico/header_publico.html'} {/block}
{block name=content}
<div class="contenedor">
  <section>
    <h2>TODA TU CONTABILIDAD EN UNA SOLA PLATAFORMA</h2>

    <ul>
      <li>Emite y envía facturas electrónicas (CFDI) y PDF de forma ilimitada y con un solo clic. </li>
      <li>Conoce tu estatus ante el SAT y monitorea tu buzón tributario. </li>
      <li>Clasifica tus ingresos y gastos según rubro para control de tu flujo. </li>
      <li>Personaliza tus facturas con el logo de tu empresa. </li>

      <li>Visualiza tus ingresos y tus gastos para conocer tu situación financiera. </li>

      <li>Muchas más funcionalidades. Solicita tu demo gratis.</li>
      <li>Tus impuestos al día, cumplimiento de tus obligaciones y asesoría fiscal.</li>
      <li>Facturación electrónica ilimitada, clasificada y en un solo sitio.</li>
    </ul>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
        <h2>Contabilidad </h2><br>
        <p>
          <img src="{$smarty.const.IMG}contabilidad.png" height="150" width="220" />
        </p>

      </div>
    </div>

  </aside>
</div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='../layout/footer.html'}{/block}