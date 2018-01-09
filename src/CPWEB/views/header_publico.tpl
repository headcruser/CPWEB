<div id="enlaces">
  <a href="en">English version </a>
</div>
<div id="logo">
  <img src="{$smarty.const.IMG}CPWEB.png" />
</div>
<div class="navegacion">
  <nav class="barra">
    <ul>
      <li>
        <a href="{$router->generateUri('CPWEB.index')}">
          <span class="primero">
            <i class="icon icon-home"></i>
          </span>Home</a>
      </li>
      <li>
        <a href="{$router->generateUri('CPWEB.quienes')}">
          <span class="segundo">
            <i class="icon icon-acerca"></i>
          </span>Quienes Somos</a>
      </li>
      <li>
        <a href="#">
          <span class="tercero">
            <i class="icon icon-servicio"></i>
          </span>Servicios</a>
        <ul>
          <li>
            <a href="{$router->generateUri('CPWEB.contabilidad')}">Contabilidad</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.nomina')}">Nomina</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.auditoria')}">Auditoria</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.asesoria')}">Asesoria Legal</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.planeacion')}">Planeacion Financiera</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{$router->generateUri('CPWEB.alianzas')}">
          <span class="cuarto">
            <i class="icon icon-alianza"></i>
          </span>Alianzas</a>
      </li>
      <li>
        <a href="{$router->generateUri('CPWEB.bolsa')}">
          <span class="quinto">
            <i class="icon icon-bolsa"></i>
          </span>Bolsa de Trabajo</a>
      </li>
      <li>
        <a href="login.php">
          <span class="sexto">
            <i class="icon icon-sesion"></i>
          </span>Iniciar Sesion</a>
      </li>
      <li>
        <a href="{$router->generateUri('CPWEB.contacto')}">
          <span class="septimo">
            <i class="icon icon-contacto"></i>
          </span>Contacto</a>
      </li>
    </ul>
  </nav>
</div>
</header>