<?php
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 29-04-18
 * Time: 15:57
 */
include 'config\config.php';

$pdo = \App\Config::getPDO();
$selectId = $_GET['param1'];
$id = $_GET['param2'];

switch($selectId) {
    case 'region' :
        $query = "SELECT idregion, nomregion FROM region WHERE idpays = '$id'";
        $result = $pdo->query($query);

        $tabRegions = [];
        foreach ($result as $region) {
            //var_dump($region['nomregion']);

            $tabRegions[$region['idregion']] = $region['nomregion'];
        }
        print_r($tabRegions);
        echo json_encode($tabRegions);
        break;

    case 'ville' :
        $query = "SELECT nomville FROM ville WHERE idregion = '$id'";
        $result = $pdo->query($query);

        $tabVilles = [];
        foreach ($result as $ville) {
            //var_dump($ville['nomregion']);

            array_push($tabVilles, $ville['nomville']);
        }
        print_r($tabVilles);
        echo json_encode($tabVilles);
        break;

    default:
        echo ('ERREUR');
}






/*$array = Array ( 'lombardie' => 'Lombardie', 'pouilles' => 'région des Pouilles', 'toscane' => 'Toscane' );
echo json_encode($array);*/