<?php
session_start();
session_unset();

if (!isset($_SESSION['id_users'])){
    header("Location:index.php");
} else {
    echo 'Eroare de autentificare';
}
