<?php
    require_once '../../controlador/tiendaControlador.php'; 

    $datos = array(
        'nom_ti' => $_POST['nom_ti'],
        'nom_prop_ti' => $_POST['nom_prop_ti'],
        'direc_ti' => $_POST['direc_ti'], 
        'telf_ti' => $_POST['telf_ti'], 
        'rubro_ti' => $_POST['rubro_ti']
    );
    echo tiendaControlador::insertarDatos($datos);

?>