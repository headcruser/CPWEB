{extends file='file:layout/page.html'}
{block name=title}<title>BOLSA DE TRABAJO</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='./header_publico.tpl'} {/block}
{block name=content}
<div class="contenedor">
  <section>
    <h1>Vacantes Permanentes</h1>

    <ul>
      <li>Contador Público.</li>
      <li>requisitos</li>
      <li>Analista contable.</li>
    </ul>

    <h2>REQUISITOS </h2>
    <p>
        Escolaridad: Lic. Contabilidad o a fin Pasante, Titulado o Proceso de Titulación.Experiencia mínima de 1 año, se toma en cuenta Servicio Social en despacho contable.Conocimientos básicos en contabilidad en general, proceso de cuentas por pagar y almacén.
        Manejo preferente JD Edwards o algún RP
    </p>

    <h2>Outsourcing</h2>
    <h3>Lista de puestos disponibles</h3>
    <ul>
      <li>Contador Público.</li>
      <li>Auditor.</li>
      <li>Analista contable.</li>
    </ul>

    <h2>Postulate: </h2>

    <h3>FORMULARIO</h3>
      <ul>
        <li>Nombre</li>
        <li>E-mail</li>
        <li>○ Telefonos.</li>
        <li>○ Perfil(Menu desplegable)
          <ul>
            <li>Gerente</li>
            <li>Supervisor.</li>
            <li>Analista</li>
            <li>Auditor</li>
            <li>Fiscalista</li>
            <li>Analistas de inventario</li>
          </ul>
        </li>
      </ul>

  <h2>Pasantes</h2>
  <p>
    Estudiar algunas de las carrera: Contabilidad
    Estar en proceso de de titulación
    Sexo: Indistinto
  </p>

  </section>

  <aside id="bienvenida">
    <div >
      <div >
        <h2>Bolsa de trabajo</h2><br>
        <p>
          <img src="{$smarty.const.IMG}bolsa.jpg" height="150" width="220" />
        </p>
      </div>
    </div>

  </aside>
</div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}