<?php
header('Content-type: application/json');
$respose['code'] = '200';
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    # code...
    $electeur = $_POST['nom'];
}
else if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $electeur = $_GET['nom'];
}else {
    $response['code'] = '500';
    $response['message'] = 'le contenue est vide';
    echo json_encode($response);
    exit;
}
include_once 'config.php';
$sql="SELECT nom.bureau as nom, quartier.bureau as quartier from burau,electeur WHERE nom.electeur='$electeur' AND id_bureau.electeur = id.bureau";
$state = $database->query($sql);
if ($state) {
    $resulte = $state->fetchAll();
    $response['datas'] = $resulte;
} else {
    # code...
    $response['code'] ='500';
    $response['message'] = 'Erruer technique';
}

echo json_encode($response);