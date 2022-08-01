<?php

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
try{
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    global $pdo;

    //smt missing
}
}catch (Exception $exception){
    echo $exception->getMessage();
}
