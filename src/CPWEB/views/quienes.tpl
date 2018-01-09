{extends file='file:layout/page.html'}
{block name=title}<title>QUIENES SOMOS</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='./header_publico.tpl'} {/block}
{block name=content}
<div class="contenedor">
    <section>
    <h2>Misión</h2>
    <p>
      Ofrecer a nuestros clientes, servicios contables y administrativos de primer nivel, utilizando toda nuestra infraestructura administrativa y talento humano, en busca del retorno del capital invertido a cada uno de sus socios.
    </p>

  <h2>Visión</h2>

  <p>
    Consolidarse como la mejor firma de contadores públicos certificados y líderes en los servicios profesionales a través del desarrollo integral de nuestros miembros altamente calificados (contadores con Maestrías, Doctorados) tanto a nivel estatal, nacional e internacional.
  </p>

  <h2>Nuestros valores son:</h2>

  <ul>
    <li>
      <b>Alto desempeño:</b> nuestro estándar de calidad, velocidad, trabajo, aprendizaje, trato al cliente, asesorías, planeación, coaching y conferencias son hechos con nuestro mejor esfuerzo y de manera consciente en búsqueda de superarnos constantemente.
    </li>

    <li>
      <b>Competitividad:</b> entre nosotros mismos creamos un equipo de apoyo completo; así mismo con nuestros clientes ofrecemos servicios, asesoría y soluciones que implican una capacitación, estudio, debate, análisis e investigación constante.
    </li>

    <li>

      <b>Confidencialidad:</b> la información procesada y generada es propiedad total del cliente, así mismo sus estrategias, contactos, clientes y proveedores. Dicha información no es utilizada para ningún fin más que el cumplir con las obligaciones fiscales e informar a nuestro cliente.
    </li>

    <li>
      <b>Ética:</b> con nuestras propuestas de planeación, éstas no fomentarán la corrupción y defraudación fiscal.
    </li>

  </ul>

  <h2>Nuestras políticas de calidad </h2>

    <p>
      Brindamos servicios profesionales de manera integral en diversas áreas como: Fiscal, Auditoría, Contabilidad, Administración de Nóminas, Legal, Calidad, Recursos Humanos, Sistemas y Capacitación, con oportunidad y atención personalizada para satisfacer las necesidades de nuestros clientes.
    </p>

  <h1>Objetivos de nuestra empresa</h1>

  <h2>Objetivo general:</h2>

  <ul>

    <li>
      Apoyar a todas las empresas que soliciten nuestros servicios, concientizándolas de que la organización, planeación, control y adecuado registro de las operaciones financieras de su empresa, conjuntamente con la planeación fiscal, son en la actualidad herramientas vitales para que subsistan como negocio en marcha, en el entorno económico y fiscal actual.
    </li>

  </ul>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
          <h2>Quienes Somos</h2><br>
          <p>
            <img src="{$smarty.const.IMG}quienesSomos.jpg" height="150" width="220" />
          </p>

          <h2>Objetivos específicos:</h2>
            <ul>
              <li>
                Proporcionar servicios integrales de calidad que beneficien económicamente a nuestros clientes y les otorguen seguridad y certeza en el adecuado pago de sus impuestos.
              </li>

              <li>
                Poner nuestros servicios siempre al alcance de todo tipo de empresas.
              </li>
            </ul>
      </div>
    </div>
  </aside>
</div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}