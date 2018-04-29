<?php
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 29-04-18
 * Time: 15:57
 */
include 'config\config.php';

$pdo = \App\Config::getPDO();
$selectId = $_GET['select'];
$id = $_GET['id'];

switch($selectId) {
    case 'region' :
        $query = "SELECT idregion, nomregion FROM region WHERE idpays = '$id'";
        $result = $pdo->query($query);

        $tab = [];
        foreach ($result as $region) {
            $tab[$region['idregion']] = $region['nomregion'];
        }
        break;

    case 'ville' :
        $query = "SELECT nomville FROM ville WHERE idregion = '$id'";
        $result = $pdo->query($query);

        $tab = [];
        foreach ($result as $ville) {
            array_push($tab, $ville['nomville']);
        }
        break;

    default:
        echo ('ERREUR');
}

echo json_encode($tab);