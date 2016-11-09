<?php
	/***
	Clase: Cpweb
	autor: Daniel
	version : 0.1
	fecha : 2016-09-21
	*/
	session_start(); // Iniciamos la sesion 
	require_once('lib/smarty/Smarty.class.php'); //Importa la libreria de smarty
	include ("configs/configuration.php"); //incluye el archivo de configuracion
	require_once('lib/phpmailer/PHPMailerAutoload.php'); //Libreria para el correo electronico

class Cpweb
{

	/***********************************************************************************/
	//							VARIABLES DE LA CLASE 
	/***********************************************************************************/
	  	//Atributos
		 var $cliente=null;
		 var $conn=null;
		 var $tabla=null; // nuevo agregar


	 // Constructor de la clase
	function __construct() 
	{
     	$this->conexion();
  	}
	
	/***********************************************************************************/
	//							CONEXION A LA BASE DE DATOS  
	/***********************************************************************************/
	function conexion()
	{
		//$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
		$this->conn = new PDO(DB_ENGINE.':host='.DB_IP.';dbname='.DB_NAME, DB_USER, DB_PASS);
	} ////////////////////////////  Fin del metodo /////////////////////////////////////



	/***********************************************************************************
						METODO PARA ESTABLECER LA TABLA A MANIPULAR 
			parametro 					tipo 	 		Descripcion
	  		@param $tabla  			   String 		  Nombre de la tabla
	**********************************************************************************/
	function setTabla($tabla)
	{
		$this->tabla=$tabla;		
	}////////////////////////////  Fin del metodo ///////////////////////////////////// 


	/***********************************************************************************
						METODO PARA OBTENER EL NOMBRE DE LA TABLA
			parametro 					tipo 	 		Descripcion
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa el nombre de la tabla.
	**********************************************************************************/
	function getTabla()
	{
		return $this->tabla;
	} ////////////////////////////  Fin del metodo ///////////////////////////////////// 

	
	/***********************************************************************************
					METODO PARA OBTENER UN ARREGLO A PARTIR DE UNA CONSULTA 
	
	parametro 					tipo 	 		Descripcion
	@Param $query 			    String 			Consulta Sql a realizar
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa Un arreglo asosiativo con la informacion solicitada.
	**********************************************************************************/
	function getAll($p_query)
	{
		//Arreglo Vacio
		$datos=array();

		//Realiza el foreach para recorrer los elementos 
		foreach($this->conn->query($p_query) as $fila) {
			array_push($datos,$fila );
			}
		return $datos;
    }////////////////////////////  Fin del metodo ///////////////////////////////////// 


	/***********************************************************************************
		Funcion para obtener un arreglo asociativo con el query correspondiente
	parametro 					tipo 	 		Descripcion
	@Param $query 				String 			Consulta Sql a realizar
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa Un arreglo asosiativo con la informacion solicitada.
	**********************************************************************************/

  	function fetchAll($query)
	{
		$statement=$this->conn->Prepare($query);
		$statement->Execute();
		$datos=$statement->FetchAll(PDO::FETCH_ASSOC);
		return $datos;
	} ////////////////////////////  Fin del metodo /////////////////////////////////////

	
	

	/***********************************************************************************
					Metodo encargado de inicializar las plantillas de smaty
	-----------------------------------------------------------------------------------
	parametro 					tipo 					Descripcion
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa la plantilla de smarty ya construida 		
	**********************************************************************************/

	function template()
	{
		$smarty=new Smarty();
		$smarty->setTemplateDir(TEMPLATE);
		$smarty->setCompileDir(TEMPLATE_c);
		$smarty->setConfigDir(CONFIGS);
		$smarty->setCacheDir(CACHE);
		return $smarty;

	} ////////////////////////////  Fin del metodo /////////////////////////////////////


	/***********************************************************************************
			Funcion para realizar un elemento dinamico retornando la plantilla 
			para poder ser implementada.
	------------------------------------------------------------------------------------
	parametro 				tipo 				Descripcion
	@param $sql 			String 			consulta a realizar
	@param $selected		int  			elemento a seleccionar
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa una plantilla de smarty 
	**********************************************************************************/

	function showList ($sql,$selected=null)
	{
		$datos=$this->getAll($sql); //Arreglo asosiativo //pero necesitamos el indexado 
		$nombresCol=array_keys($datos[0]);  //Obtiene el identificador del arreglo en la primera posicion
		$template=$this->template();	//llama a la libreria de smarty	
		$template->assign('datos',$datos); 	// envio de parametros
		$template->assign('selected',$selected);	//enviamos el parametro del combo box
		$template->assign('datos',$datos);
		$template->assign('id',$nombresCol[0]);	//Envia el nombre de las columnas 
		return $template->fetch('select.component.html'); 

	} ////////////////////////////  Fin del metodo /////////////////////////////////////


	/***********************************************************************************
						Funcion para realizar insert Generico 
	parametro 					tipo 					Descripcion
	@param $p_array 			Array 			Elementos a insertar en la tabla
	
	**********************************************************************************/

	function insert($p_array)
	{
		unset($p_array['enviar']);
		$nombresCol=$this->getNombresColumnas($p_array);
		$columnas[0]=$this->getColumnas($p_array);
		$columnas[1]=str_replace(',',',:',$columnas[0]);
		$columnas[1]=":".$columnas[1];

		$query="INSERT INTO ".$this->getTabla()."(".$columnas[0].") values(".$columnas[1].")";
		$stmt=$this->conn->Prepare($query);

		for($i=0; $i<sizeof($nombresCol); $i++)
		{
			$stmt->bindParam(':'.$nombresCol[$i], $p_array[$nombresCol[$i]]);
		}

		$this->verifyQuery($stmt);
	}////////////////////////////  Fin del metodo /////////////////////////////////////



	/***********************************************************************************
						Funcion para realizar Update Generico 
	parametro 					tipo 					Descripcion
	@param $p_array 			Array 			Elementos a actualizar de la tabla
	@param $condicion 			Array 			Elementos del where
	
	**********************************************************************************/

	function update($p_array,$condicion=null) 
	{
		unset($p_array['enviar']);
		$nombresCol=$this->getNombresColumnas($p_array);
		$where=null;

		if(!empty($condicion) )
		{
			$where="where ";
			$nombres_columnas_where=array_keys($condicion);

			for ($i=0; $i <sizeof($nombres_columnas_where) ; $i++) 
			{ 
				$where.=$nombres_columnas_where[$i];
				$where.='=:'.$nombres_columnas_where[$i];

				if($i<sizeof($nombres_columnas_where)-1)
				{
					$where.=" and ";
				}
			}
		}

		$columnas=$this->getColumnas($p_array,"update");
		

		$SQL="UPDATE ".$this->getTabla()." set ".$columnas." ".$where;

		$statement=$this->conn->Prepare($SQL);

		for($i=0; $i<sizeof($nombresCol); $i++)
		{	
			$statement->bindParam(':'.$nombresCol[$i], $p_array[$nombresCol[$i]]);
		}		

		$this->verifyQuery($statement);		
	} ////////////////////////////  Fin del metodo /////////////////////////////////////

	

	/***********************************************************************************
	Funcion que obtiene los nombres de las columnas de una tabla
	parametro 					tipo 					Descripcion
	@param $p_datos 			Array 			Elementos de la tabla
	@param $condicion 			String 			Indica si es update o insert
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa un arreglo con las columnas  de una tabla
	
	**********************************************************************************/
	function getColumnas($p_datos, $accion=null)
	{	
		$col="";
		$nombres_columnas=$this->getNombresColumnas($p_datos);

		for($i=0; $i<sizeof($nombres_columnas); $i++)
		{	
			$col.=$nombres_columnas[$i];
			
			if($accion=="update")		
				$col.="=:".$nombres_columnas[$i];

			if($i<sizeof($nombres_columnas)-1)
				$col.=",";
		}
		return $col;
	} ////////////////////////////  Fin del metodo ///////////////////////////////////// 


	/**********************************************************************************
	Funcion para obtener los nombres de la columna de una tabla 
	
	parametro 					tipo 					Descripcion
	@param $p_array 			Array 				Arreglo con las columnas
	-----------------------------------------------------------------------------------
	Valores de retorno
	@return Regresa un arreglo con los nombres de las columnas.
	**********************************************************************************/

	function getNombresColumnas($p_array)
	{
		return array_keys($p_array);
	}////////////////////////////  Fin del metodo /////////////////////////////////////


	/***********************************************************************************
	Funcion que realiza  y verfica la ejecucion de un query
	parametro 					tipo 					Descripcion
	@param $p_statement 	  Statement 			comando que se quiere ejecutar
	
	**********************************************************************************/
	public function verifyQuery($p_statement)
	{
		if(!$p_statement)
			die( $this->conn->errorInfo() );		
		else
			$p_statement->Execute();
	} ////////////////////////////  Fin del metodo /////////////////////////////////////


	/***********************************************************************************
	Metodo que retorna en formato html el valor o resultado de una consulta en html 
	parametro 					tipo 					Descripcion
	@param $p_consulta 	      String 			La consulta a convertir  
	
	**********************************************************************************/
	function getQueryHtml($p_consulta)
	{
		$datos=$this->fetchAll($p_consulta); //Arreglo asociativo
		$campos=$this->getNombresColumnas($datos[0]);
		$template=$this->template();	//llama a la libreria de smarty	
		$template->assign('datos',$datos);
		$template->assign('campos',$campos);
		return $template->fetch('query2html.component.html'); 

	} ////////////////////////////  Fin del metodo /////////////////////////////////////

	
	/***********************************************************************************
	Revisa el rol del usuario que se ha logeado en el sistema 
	parametro 					tipo 					Descripcion
	@param $rol 	      		String 			El rol del usuario que entro al sistema  

	**********************************************************************************/

	function checarAcceso($rol=null)
	{
		$data=$_SESSION;

		if(isset($data['validado']))
		{

			if($data['validado'])
			{
			  // Administrador
				$role=$_SESSION['roles'];
				$flag=false;
				
				for ($x=0; $x <sizeof($role) ; $x++) 
				{ 

					if($role[$x]['rol']==$rol)
					{
						$flag=true;
					}

					if(!$flag)
					{
						//Inicializar smarty
						$templates=$this->template();	 
						$templates->assign('mensaje',"No tiene Privilegios para entrar");
						$templates->display('login_form.html');
						die();
					  header('Location: login.php');		
					}
				}
			}
			else{
				header('Location: login.php');
			}

		}else{
			header('Location: login.php');
		}	
	} ////////////////////////////  Fin del metodo /////////////////////////////////////


	/***********************************************************************************
	Construye un header segun los privilegios Asignados
	parametro 					tipo 					Descripcion
	@param $p_consulta 	      String 			Privilegio asignado a la barra  
	
	**********************************************************************************/
	function Privilegiosheader($privilegio)
	{		
		$template=$this->template();	//llama a la libreria de smarty	
		$template->assign('privilegio',$privilegio);
		return $template->fetch('header_privilegios.html'); 

	}////////////////////////////  Fin del metodo ///////////////////////////////////// 

} // Fin de la clase

?>
