<?php
header('Content-type: application/json');
include_once 'config.php';


$response['code']='200';
$sql = "SELECT * FROM candidats";
try {
    //code...
    $state = $database->query($sql);
    if ($state) {
        # code...
        $resulte = $state->fetchAll();
        $response['code']='200';
        $response['datas'] =$resulte;
    }else {
        # code...
        $response['code']='500';
        $response['messages'] = 'Erreur technique';
    }
} catch (Exception $th) {
    $response['code']='500';
    $response['message'] = $th->getMessage();
}
$json = json_encode($response);
echo $json;