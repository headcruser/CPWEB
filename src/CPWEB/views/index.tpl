{extends file='file:layout/template.html'}
{block name=title}<title> CPWEB Y ASOCIADOS </title>{/block}
{block name=content}
    <div class="container">
      <header class="header">
        <div class="menu margenInterno">
          <div class="logo"> <a href="#"> CPWEB</a></div>
          <div class="nav">
            <a href="{router nombreRuta="CPWEB.index"}">
              <i class="fas fa-home"></i> Home</a>

            <a href="{router nombreRuta="CPWEB.show" parametros=['slug'=>'alianzas']}">
              <i class="fas fa-users"></i> Quienes</a>

            <a href="#"><i class="fab fa-servicestack"></i> Servicios</a>

            <a href=""><i class="fas fa-address-card"></i> Alianzas
            </a>

            <a href="#">
                <i class="fas fa-briefcase"></i>  Bolsa
            </a>

            <a href="#">
                <i class="fas fa-user"></i>
              Login</a>

            <a href="">
                <i class="fas fa-phone-volume"></i> Contacto
            </a>
          </div>

          <div class="social">
            <a href="#"> <i class="fab fa-facebook"></i></a>
            <a href="#"> <i class="fab fa-whatsapp-square"></i></a>
          </div>
        </div>
        <div class="principal margenInterno">
        <h1>
          CP Web comienza operaciones el año de 2016 en México,
          fundada por profesionistas independientes en respuesta a las demanda
          del mercado por Servicios Contables Integrales para cubrir bajo un
          solo punto de contacto todas las necesidades de sus clientes en
          Auditoría contable, Asesoría, Contabilidad, Asuntos Fiscales y
          Consultoría Financiera.
        </h1>
        </div>
      </header>

      <section class="section margenInterno">
        <div class="articles">
          <article class="article">
            <h2>HISTORIA</h2>
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
        </div>
        <aside class="aside">
          <div class="publicity">
              <h2>Información</h2>
              <img src="{$smarty.const.IMG}autor.jpg" />
              <strong>
                Bienvenido a nuestro sitio Web en donde podrá obtener un servicio de calidad, debido a nuestas certificaciones ISO-9000
              </strong>
              <h3>Atencion a clientes</h3>
              <img class="img-responsive" alt="Responsive image" src="{$smarty.const.IMG}atencion.jpg" />
          </div>
        </aside>
      </section>

      <footer class="footer margenInterno">
        <nav class="pie">
            <a href="avisoprivacidad.php"> &copy; Copyright  2013 CPWEB. All rights reserved. <i class="fas fa-balance-scale"></i></a>
        </nav>
      </footer>
    </div>
  {/block}
  {* {include file='file:layout/footer.html'} *}