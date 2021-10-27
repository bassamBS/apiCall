<?php


spl_autoload_register(function ($class) {
    require_once "models/$class.php";
});



switch($_GET['action']):
    case 'city':
        include('controllers/cityController.php');
        break;
    case 'departement':
        include('controllers/departmentController.php');
        break;
    case 'region':
        include('controllers/regionController.php');
        break;
endswitch;