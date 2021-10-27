

<?php
    $templateName = 'departement';
    $templateType = 'list';

   

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://geo.api.gouv.fr/departements");
   /*curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
    curl_setopt($ch, CURLOPT_POSTFIELDS,"username=myname&password=mypass");*/   // post data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close ($ch);

    // returned json string will look like this: {"code":1,"data":"OK"}
    // "code" may contain an error code and "data" may contain error string instead of "OK"
    $aDepartments = json_decode($json);

    include('views/base.php'); 
?>