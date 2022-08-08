<?php

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username= '.$username.' ";

if ($res = $pdo->query($sql)) {
    if ($res->rowCount() > 0) {
        while ($row = $res->fetch()) {
            session_start();
            $_SESSION['logat'] = 'logat';
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            session_write_close();

            $passHash = $row['password'];
            if (password_verify($_POST['password'], $passHash)) {
                loggedCheck();
            } else {
                echo 'Bad password';
            }
        }
    }
}
function loggedCheck()
{
    if (!isset($_SESSION['logat']) && $_SESSION['logat'] != 'logat') {
        echo '<div>' . $_SESSION['username'] . ' is logged</div>';
        header('location:index.php');
    } else {
        echo 'Nobody is logged in';
    }

}




