<?php
namespace CpWebDotMe\lib\Route;
final class SplitRoute
{
    const DELIMITER ='/';

    /**
    * PartitionPath
    *
    * Convierte una cadena a partir del delimitator '/'.
    * a un array que contiene los elementos separados por
    * el delimitador.
    *
    * @param $path string Recibe una cadena a analizar.
    * @return array Regresa un array con la cadena dividida.
    * si solo se ingresa el delimintador / ,  retornara un
    * array vacio.
    */
    public function split(string $path): array
    {
        return explode(self::DELIMITER,  $this->clearCharacterSlash( $path ));
    }
    /**
	 * NumRoutes
	 *
	 * Cuenta el numero de elementos que se dividieron de la ruta
	 * Por ejemplo: "/index/login"
	 * resultado=2 (index, login);
     *
	 * @param string Cadena que va a contabilizar el numero de elementos dividos
	 * @return int Regresa la cantidad de elementos encontrados en el la cadena asignada
	 */
    public function numRoutes(string $path): int
	{
		return count( $this->split( $path ) );
    }
    /**
     * clearCharacterSlash
     *
     * Limpia la cadena, quitando los / al incio de la cadena
     * @param string $word Palabra que se debe limpiar
     * @return string Devuelve una cadena Libre de /
   */
    public function clearCharacterSlash( string $word ):string
    {
        return trim( $word ,self::DELIMITER );
    }
}
