<header>
  <div class="container">
    <div class="link">
      <a href="#">English version</a>
    </div>
    <div class="logo">
    <figure>
      <img class="image" src="{$smarty.const.IMG}CPWEB.png" />
    </figure>
    </div>
    <div class="container">
      <nav >
        <ul class="menu">
          <li>
            <a href="{$router->generateUri('CPWEB.index')}">
              <span class="primero">
                <i class="fas fa-home"></i>
              </span>Home</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.show',['slug'=>'alianzas'])}">
              <span class="segundo">
                <i class="fas fa-users"></i>
              </span>Quienes</a>
          </li>
          <li>
            <a href="#">
              <span class="tercero">
                <i class="fab fa-servicestack"></i>
              </span>Servicios</a>
          </li>
          <li>
            <a href="">
              <span class="cuarto">
                <i class="icon icon-alianza"></i>
              </span>Alianzas</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.show',['slug'=>'bolsa'])}">
              <span class="quinto">
                <i class="icon icon-bolsa"></i>
              </span>Bolsa</a>
          </li>
          <li>
            <a href="login.php">
              <span class="sexto">
                <i class="icon icon-sesion"></i>
              </span>Login</a>
          </li>
          <li>
            <a href="{$router->generateUri('CPWEB.show',['slug'=>'contacto'])}">
              <span class="septimo">
                <i class="icon icon-contacto"></i>
              </span>Contacto</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>