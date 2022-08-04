<?php
session_start();
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$passHash=password_hash($_POST['password'],PASSWORD_BCRYPT);

if (isset($_POST["login"])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo 'All fields are required';
    } else{
        $query = "SELECT * FROM users WHERE username= :username AND password= :password ";
        $stmt = $pdo->prepare($query);
        $stmt->execute(
            array(
                'username' => $_POST['username'],
                'password' => $_POST['password']
            )
        );
        if(password_verify($_POST['password'],$passHash)){
            header('location:index.php');
        }else{
            echo 'Bad password';
        }
    }
}




