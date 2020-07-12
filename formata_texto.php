<?php
switch ($_POST['valores']) {
    case 1:
        $texto = $_POST['texto'];
        print ucfirst($texto);
        break;
    case 2:
        $texto = $_POST['texto'];
        print strtoupper($texto);
        break;

    case 3:
        $texto = $_POST['texto'];
        print strtolower($texto);
        break;

    case 4:
        $texto = $_POST['texto'];
        print ucwords($texto);
        break;
    default:
        $texto = $_POST['texto'];
        print $texto;
}
