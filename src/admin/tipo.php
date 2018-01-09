<?php
    /*Muestra el formulario tipo*/
    include('../controllers/tipo.php'); //incluye clase tipo
    $web=new Tipo; //Crea un objeto de la clase tipo

    //Elementos que inician vacios
    $accion=null;
    $id_tipo=null;
    $privilegio=null;
    $templates=$web->template();
    $templates->setTemplateDir("../templates/contador");

    // Validacion para saber que tipo de header construir
if (isset($_SESSION)) {
        $privilegio=$web->obtenerRolSesion();
}


    $web->checarAcceso($privilegio); // policia
    $header=$web->Privilegiosheader($privilegio); //header


    //Obtiene la accion seleccionada por el usuario
if (isset($_GET['accion'])) {
    $accion=$_GET['accion'];
}

if (isset($_GET['id_tipo'])) {
    //Obtener el id del tipo
    $id_tipo=$_GET['id_tipo'];
}

switch ($accion) {
    case 'nuevo':
        $templates->assign('header', $header);
        $templates->display('tipo_form.html');
        die();

    break;

    //Edita al tipo seleccionado
    case 'editar':
        $tipo=$web->getTipo($id_tipo);
        //$combo=$web->showList('select id_tipo,tipo from tipo',$estado[0]['id_tipo']);
        $templates->assign('tipo', $tipo[0]);
        $templates->assign('id_tipo', $id_tipo);
        $templates->assign('header', $header);
        $templates->display('tipo_form.html');
        die();
    break;


    // inserta un nuevo tipo
    case 'alta':
        $web->setTabla("tipo");
        $web->insert($_POST);
        break;


    // Actualiza la informacion del tipo
    case 'guardar':
        $web->setTabla("tipo");
        $web->update($_POST, array('id_tipo'=>$_POST['id_tipo']));

        break;

    //Elimina a un Estado de la base de datos
    case 'eliminar':
            $web ->deleteTipo($id_tipo);
        break;

    case 'ver':
        break;
}

    //Muestra la tabla de los tipo registrados
    $tipo=$web->fetchAll('select * from tipo ');
    $templates->assign('titulo', 'TIPOS DISPONIBLES');
    $templates->assign('tipos', $tipo);
    $templates->assign('header', $header);
    $templates->display('tipo.html');
