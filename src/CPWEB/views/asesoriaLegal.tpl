{extends file='file:layout/page.html'}
{block name=title}
<title>ASESORIA LEGAL</title>{/block}
{block name=icon}{/block}
{block name=header}{include file='./header_publico.tpl'}{/block}
{block name=content}
  <div class="contenedor">
    <section>

      <h1>ASESORIA LEGAL </h1>
      <p>
        La asesoría legal es respaldada por nuestro equipo de abogados, el cual está integrado por profesionales con amplia experiencia en diversas áreas del derecho. La especialización, experiencia y compromiso de los abogados no solo brindan al cliente una respuesta eficiente, si no que además en la asesoría legal se proponen soluciones adecuadas a sus necesidades.
        Mostramos a continuación algunas especialidades de nuestro equipo de abogados.
      </p>

      <h2>ABOGADOS CORPORATIVOS</h2>
        <ul>
          <li>Redacción de actas de asambleas de accionistas</li>
          <li>Contratos</li>
          <li>Constitución de sociedades</li>
        </ul>

      <h2>ABOGADO FISCAL</h2>
        <ul>
          <li>Asesoría y litigio fiscal y administrativo</li>
          <li>Auditorias. Defensa contramultas de todo tipo. (Hacienda-Recaudación-Etc.)</li>
          <li>Revisiones Juicios de nulidad y de revocación. Embargos.</li>
        </ul>

      <h2>ABOGADOS LABORALES</h2>
        <ul>
          <li>Atención a citas de inspectoría del trabajo</li>
          <li>Elaboración de reglamento interior de trabajo.</li>
          <li>Defensa y litigio de demandas laborales.</li>
          <li>Rescisiones de trabajadores. Despidos.</li>
          <li>Huelgas Auditorias Laborales.</li>
          <li>Elaboración de Actas Administrativas.</li>
          <li>Paros Laborales.</li>
          <li>Sindicatos. Asesoría en general.</li>
        </ul>

      <h2>DERECHO MERCANTIL Y CIVIL</h2>
        <ul>
          <li>Asesoría y Elaboración de todo tipo de contratos</li>
          <li>Demandas Mercantiles y Civiles</li>
          <li>Defensa Mercantiles y Civiles</li>
          <li>Medios preparatorios y juicios en general</li>
          <li>Apelaciones, Amparos</li>
          <li>Todo tipo de juicios Hipotecarios</li>
          <li>Desahucio, Testamentarios, Divorcios, Pensiones Alimenticias, Herencias, etc.</li>
        </ul>

      <h2>PROPIEDAD INTELECTUAL</h2>
      <ul>
        <li>Registro de marcas y patentes
          Servicios legales diversos</li>
        <li>Trámites ante notarios, registro público de la propiedad, gobernación y  con todo tipo de autoridades y dependencias</li>
        <li>Tramitación de permisos y licencias</li>
        <li>Recuperación de adeudos y cartera vencida de su empresa</li>
      </ul>

    </section>

    <aside id="bienvenida">

      <div >
        <div >
          <h2>Asesoria Legal</h2><br>
          <p>
            <img src="{$smarty.const.IMG}asesoria.png" height="150" width="220" />
          </p>

        </div>
      </div>

    </aside>

  </div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}