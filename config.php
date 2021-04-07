<?php
$dbname = 'api_election';
$host='localhost';
try {
    $database = new PDO("mysql:host=$host;dbname=$dbname",'root','kingatal1');
} catch (Exception $e) {
    
$database = null;
    echo $e->getMessage();
}

?>