{extends file='file:layout/page.html'}
{block name=title}<title>ALIANZAS</title>{/block}
{block name=icon}{/block}
{block name=header} {include file='./header_publico.tpl'} {/block}
{block name=content}
  <div class="contenedor">
      <section>
      <h1>SOCIOS</h1>
      <article>
            <p>
              Actualmente con la finalidad de apoyar de  manera integral a sus clientes ,
              se han establecido alianzas con especialistas en las áreas de :
            </p>
            <h2>Propiedad Intelectual</h2>
            <ul>
              <li>Nombre: Lofton</li>
              <li><a href="http://www.loftonsc.com/servicios/juridico/juridico-corporativo/propiedad-industrial.html?/propiedad-industrial.html"></a>Página web:</li>
              <li>Teléfono:  (55)1500-0650      EXT. 1201</li>
              <li>Correo:  contacto@loftonsc.com</li>
            </ul>

          <h2>Comercio Exterior</h2>
          <ul>
            <li>Nombre: SERVICIO CORPORATIVO EN COMERCIO EXTERIOR, S.C.</li>
            <li>Página web: http://mexicoxport.com/empresa.php?id=258</li>
            <li>Teléfono: 3143325119, 3143324544, 3143327266</li>
            <li>Correo:</li>
          </ul>

          <h2>Derecho civil</h2>
          <ul>
            <li>Nombre: Bufet Montanya</li>
            <li>Página web:  http://montanya-advocats.com/index.php</li>
            <li>Teléfono:(5255)90003048</li>
          </ul>

          <h2>Derecho Corporativo y Comercial</h2>
          <ul>
            <li>Nombre: Bufete Holguin y Abogados(BHA)</li>
            <li>Página web: http://holguinabogados.com.mx/</li>
            <li>Teléfono: (442) 213 05 83 y 213 02 64</li>
            <li>Correo:bha@holguinabogados.com.mx</li>
          </ul>

            <h2>Estudios de precios de Transferencia</h2>
          <ul>
            <li>Nombre SAT</li>
            <li>Página web: http://www.sat.gob.mx/contacto/Paginas/directorio_modulos.aspx</li>
            <li>Teléfono: 01 55 627 22 728 </li>
            <li>Correo: denuncias@sat.gob.mx.</li>
          </ul>

          <h2>Derecho Fiscal</h2>
          <ul>
              <li>  Derecho  y obligaciones de los contribuyentes</li>
              <li>Página web: https://sfpya.edomexico.gob.mx/recaudacion/asistencia/DerechosObligaciones.jsp?a=3
              </li>
              <li>Teléfono: 01 800 715 43 50</li>
              <li>Correo: asismex@edomex.gob.mx</li>
          </ul>

          <h2>Derecho Laboral</h2>
              <ul>
                <li>Nombre: Ustariza Abogados</li>
                <li>Teléfono: 6108161 / 6108164</li>
                <li>Correo: </li>
              </ul>
      </article>

    </section>

    <aside id="bienvenida">
      <div >
        <div class="container-fluid">
          <h2>Alianzas</h2><br>
          <p>
            <img src="{$smarty.const.IMG}alianzas.jpg" height="150" width="220" />
          </p>
        </div>
      </div>
    </aside>
  </div>  <!--Fin del contenedor-->
{/block}
{block name=footer}{include file='file:layout/footer.html'}{/block}