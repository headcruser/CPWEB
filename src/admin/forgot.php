<?php
/**Formulario para la recuperacion del correo */
	include('../controllers/login.php'); // Incluir la clase principal

	$web=new Login;
	$accion=null;
	$templates=$web->template();  // Inicializar smarty
	$header=$web->Privilegiosheader("login"); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];

		// Casos a realizar
		switch ($accion)
		{
			case 'validar': //Valida el correo enviado
			  	$correo=$_POST['correo'];

			  	// Validar si la variable para cumplir la expresion regular del correo

				//Se realiza una consulta para ver si coincide el correo
			  	$sql= "select id_usuario from usuario where email='$correo'";
			  	$resultado=array();
			  	$resultado=$web->fetchAll($sql);

			  	//si hay un registro que coincide
			  	if(isset($resultado[0]))
			  	{
			  		//Genera la clave para la recuperacion del correo
			  		$cadena1=md5( rand(1,1000000) );
			  		$cadena2=md5(md5( sha1(($resultado[0]['id_usuario'].$correo.rand(1,9999))) ).rand(1,1000000).$cadena1);
			  		$cadena=$cadena1.$cadena2;

			  		//Se actualiza la tabla usuario
			  		$web->setTabla("usuario");

			  		// Se agregan los campos restantes
			  		$datos['id_usuario']=$resultado[0]['id_usuario'];
			  		$datos['clave']=$cadena;

					// Funcion para obtener la fecha actual mas dos dias
			  		$fecha = date('Y-m-j');
					$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'Y-m-j' , $nuevafecha );

			  		$datos['fecha_clave']=$nuevafecha ;
					$web->update( $datos,array('id_usuario'=>$resultado[0]));

			  		// aqui voy a mandar el email
			  		 $web->forgotPassword($correo, $cadena);
						$templates->assign("confirmacion","Se ha enviado un correo electronico con un vinculo , tiene dos dias para realizar el cambio");
			  	}else
			  	{
			  		// Se envia mensaje
			  		$templates->assign("mensaje","No existe el correo electronico");
			  	}
			break; // Fin valida

			case 'recuperar':

				/**Obtiene la fecha de dos dias antes */
				$fecha = date('Y-m-j');
				$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
				$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
				$clave="*";	//La clave predeterminada para que no coincida

				//
				if(isset($_GET['clave']))
				{
					$clave=$_GET['clave'];
				}

				//Consulta para saber si la clave coincide
				$sql="select id_usuario from usuario where clave='$clave' and fecha_clave>='$nuevafecha'";

			  	$resultado=array();
			  	$resultado=$web->fetchAll($sql);


			  	// si hay un registro que coincide
			  	if(isset($resultado[0]))
			  	{
			  		$templates->assign("clave",$clave);

			  		//Se manda a un formulario aparte
			  		$templates->display("forgot_recuperar.html");
			  		die();
			  	}
			  	else
			  	{
			  		$templates->assign("mensaje","Clave invalida");
			  	}
			break;

				case 'restablecer':
					// Restablecer
				$contrasena=$_POST['contrasena'];
				$contrasena2=$_POST['contrasena2'];
				$clave=$_POST['clave'];

				if($contrasena==$contrasena2)
				{
					$contrasena=md5($contrasena);
					/**Obtiene la fecha de dos dias antes */
					$fecha = date('Y-m-j');
					$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'Y-m-j' , $nuevafecha );

					//Consulta para saber si la clave coincide
						$sql="select id_usuario from usuario where clave='$clave' and fecha_clave<='$nuevafecha'";

						$resultado=array();
						$resultado=$web->fetchAll($sql);

						// si hay un registro que coincide
						if(isset($resultado[0]))
						{
							$web->setTabla("usuario");
							//Crear arreglo
							$temp=array();
							$temp['contrasena']=$contrasena;
							$temp['clave']=null;
							$temp['fecha_clave']=null;
							$temp['id_usuario']=$resultado[0]['id_usuario'];

							$web->update( $temp,array('id_usuario'=>$resultado[0]['id_usuario']));

							$header=$web->Privilegiosheader("login"); //Crea el header
							$templates->assign('header',$header);
							$templates->assign('msg', 'La contraseña se reestableció');
							$templates->display("login_form.html");
							die();
						}
						else
						{
							$templates->assign("mensaje","Clave invalida");
						}
				}
				break;
		}

	}

	$templates->assign('header',$header);
	$templates->display("forgot.html");
 ?>
