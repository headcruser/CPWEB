{extends file='file:layout/page.html'}
{block name=title}
  <title> CPWEB Y ASOCIADOS </title>
{/block}
{block name=icon}{/block}
{block name=header}
  {include file='./header_publico.tpl'}
{/block}
{block name=content}
    <div class="contenedor">
      <section>
        <h1>HISTORIA</h1>
        <article>
          <p>
            CP Web comienza operaciones el año de 2016 en México,
            fundada por profesionistas independientes en respuesta a las demanda
            del mercado por Servicios Contables Integrales para cubrir bajo un
            solo punto de contacto todas las necesidades de sus clientes en
            Auditoría contable, Asesoría, Contabilidad, Asuntos Fiscales y
            Consultoría Financiera.
          </p>
          <p>
            Nuestra empresa tiene como principal enfoque brindarle atención
            especializada en todos Nuestros Servicios a los costos más
            competitivos. Nuestro grupo de fiscalistas y contadores, altamente
            especializado en materia fiscal, cuenta con
            la experiencia y profundo conocimiento de las leyes fiscales para
            garantizar la calidad de todos nuestros servicios y confiabilidad de
            nuestros resultados. Nuestra empresa funciona en base a la filosofía
            de mejora continua en el servicio para satisfacer todas las necesidades
            de nuestros clientes y hacer frente a los constantes cambiosde las leyes
            fiscales y laborales.
          </p>
          <p>
            Nuestra empresa actualmente tiene destacada presencia en las ciudades de Guanajuato, Celaya y Querétaro en México con alcance
            en toda la República Mexicana
          </p>
        </article>
      </section>

      <aside id="bienvenida">
        <h2>Información</h2>
        <div class="container-fluid">
          <img src="{$smarty.const.IMG}autor.jpg" />
        </div>
        <div class="center-block">
          <p>
            <strong>
              Bienvenido a nuestro sitio Web en donde podrá obtener un servicio de calidad, debido a nuestas certificaciones ISO-9000
            </strong>
          </p>
        </div>

        <div class="container-fluid">
          <h3>Atencion a clientes</h3>
          <img class="img-responsive" alt="Responsive image" src="{$smarty.const.IMG}atencion.jpg" />
        </div>

      </aside>
    </div>
  </div>
  {/block}
{block name=footer}
  {* Call Views from folder template to Smarty *}
    {include file='file:layout/footer.html'}
{/block}