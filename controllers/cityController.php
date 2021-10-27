<?php
    $templateName = 'ville';
    $templateType = 'list';

    $response = file_get_contents('https://geo.api.gouv.fr/departements/');
    $aDepartments = json_decode($response);

    $departement = $_GET['dpt'];

    $response = file_get_contents("https://geo.api.gouv.fr/departements/$departement/communes");
    $aCities = json_decode($response);

    include('views/base.php'); 
?>