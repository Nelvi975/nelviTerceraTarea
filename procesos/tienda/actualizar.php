<?php
    require_once '../../controlador/tiendaControlador.php'; 

    $datos = array(
        'nom_ti' => $_POST['nom_tiu'],
        'nom_prop_ti' => $_POST['nom_prop_tiu'],
        'direc_ti' => $_POST['direc_tiu'], 
        'telf_ti' => $_POST['telf_tiu'], 
        'rubro_ti' => $_POST['rubro_tiu'],
        'id_ti' => $_POST['id_ti']
    );
    echo tiendaControlador::actualizarDatos($datos);

?>