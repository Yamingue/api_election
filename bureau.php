<?php
$respose['code'] = '200';
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    # code...
    $electeur = $_POST['nom'];
}
else if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $electeur = $_GET['nom'];
}else {
    $respose['code'] = '500';
    $respose['message'] = 'le contenue est vide';
}