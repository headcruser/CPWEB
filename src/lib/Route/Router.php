<?php namespace CpWebDotMe\lib\Route;

/**
 * Rourer Controllers
  * @author: Daniel Martinez
  * @license: MIT
  */
class Router
{
	private $uri;
  	private $_systemControllers;
  	const SLASH ='/';
	use HelpController;

  public function __construct()
  {
    $this->_controllers=array( "/"=>"indexController",
                              "/home"=>"indexController",
                              "/auth"=>"AuthController",
                              "/registro"=>"registroController",
                              "/admin" =>"adminController",
                              "/usuario" =>"usuarioController",
                              "/entrada" =>"EntradaController"
                            );
    $this->setUri();
  }
  /**
   * setUri
   *
   * Asigna la ruta del navegador web,
   * mediante la superglobal Get.
   *
   * @return void
   */
  private function setUri()
  {
    $this->uri=isset($_GET["uri"])?$_GET["uri"]:self::SLASH;
  }
  /**
   * Submit
   *
	 * Enruta al usuario a la página correspondiente
   * dependendo la ruta del navegador.
   *
	 * @return type void
	 */
	public function submit()
	{
		if( $this->uri!=self::SLASH )
			return $this->readerPath($this->uri);

    if( $this->searchKeyInControllers( self::SLASH ) )
    {
      foreach ($this->_controllers as $ruta => $controller)
        if( $ruta == self::SLASH)
          $controlador=$controller;

      $this->getController('index',$controlador);
    }
  }
  /**
	 * readerPath
	 *
	 * Lee la ruta especificada por el usuario
	 * @param array $ruta Contiene la ruta del usuario
	 * @return void No retorna ningun Valor
	 */
	public function readerPath(string $uri)
	{
		foreach ($this->_controllers as $ruta => $controller)
		{
			if( $this->clearCharacterSlash($ruta) !=="" )
			{
				if( $this->searchFirstMatch( $uri, $ruta ) )
				{
					$arrayParams  = array();
          			$controlador  = $controller;
					$metodo       = "";
					$cantidadRuta = $this->numRoutes($ruta);
          			$cantidad     = count($dividePaths);
					if ($cantidad > $cantidadRuta)
					{
            			$metodo = $dividePaths[$cantidadRuta];
						for ($i = 0; $i < $cantidad; $i++)
              			if ($i > $cantidadRuta)
                		$arrayParams[] = $dividePaths[$i];
          			}
				}
			}
    	}
  }

  /**
   * searchFirstMatch
   *
   * Encuentra la primera ocurrencia de un substring en un string.
   *
   * @param string $haystack Lugar en dónde hay que buscar
   * @param string $needle Aguja que hay que buscar
   * @return bool
   * Devuelve True Si encontro alguna coincidencia
   * Devuelve False en caso de no encontrar coincidencias
   */
  private function searchFirstMatch(string $haystack ,string $needle): bool
  {
    return strpos( $haystack, $this->clearCharacterSlash( $needle ) ) !==false;
  }
  /**
   * searchKeyInControllers
   *
   * Realiza Busqueda de una clave dentro de un arreglo asociativo
   *
   * @param string $key Valor a buscar en el arreglo de controladores
   * @return bool Devuelve True Si encontro alguna coincidencia,
   * en caso de no encontrar coincidencias, Devuelve False
   */
  private function searchKeyInControllers(string $key):bool
  {
    return array_key_exists($key,$this->_controllers);
  }


}