<?php
	// DATABASE CONFIG
	$data=__loader( CONFIG.'database.json');
	define ('DB', $data['database'] );
	$data=null;
	// SMARTY CONFIGURARION
	define('TEMPLATE',RESOURCES.'templates'.SD);
	define('TEMPLATE_c',RESOURCES.'templates'.SD."templates_c".SD);
	define('CACHE',RESOURCES.'cache'.SD);
	define('CONFIGS',RESOURCES.'configs'.SD);
	//PUBLIC RESOURCES
	define ('CSS', RESOURCES.'css'.SD);
	define ('JS', RESOURCES.'js'.SD);
	define ('IMG', RESOURCES.'image'.SD);
	define ('TEMPLATES', RESOURCES.'templates'.SD);

	/**
	 * Reader Configuration
	 */
	function __loader(string $pathFile):array
	{
		if( !existFile($pathFile) )
			throw new Exception("File: ".$pathFile." not Exist");

		$data = json_decode( file_get_contents($pathFile) , true);
		return $data;
	}

	function existFile( string $file):bool{
		return file_exists( $file );
	}
