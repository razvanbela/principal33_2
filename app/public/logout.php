<?php
session_start();
session_destroy();
if(isset($_SESSION['id_user'])) {
    header('location:login.php');
}else{
    echo 'Eroare LOGOUT';
}