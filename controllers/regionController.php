<?php
    $templateName = 'region';
    $templateType = 'list';

    // Récupération de toutes les régions
    $response = file_get_contents('https://geo.api.gouv.fr/regions');
    $aRegions = json_decode($response);

    //Récupération de tous les départements corrélativement à la région sélectionnée
    if(!empty($_GET['region'])):
        $res = file_get_contents('https://geo.api.gouv.fr/regions/'.$_GET['region'].'/departements?fields=code'); 
        $aDepartments = json_decode($res);
    endif;

    //Récupération de toutes les villes corrélativement au département sélectionné
    if(!empty($_GET['dpt'])):
        $res = file_get_contents('https://geo.api.gouv.fr/departements/'.$_GET['dpt'].'/communes?fields=code&format=json&geometry=centre');
        $aCities = json_decode($res);
    endif;

    include('views/base.php'); 