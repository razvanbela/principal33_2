<?php
session_start();

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST["signup"])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO `users`(`username`,`email`,`password`) VALUES (:username,:email,:password)");
        $res=$stmt->execute(
            array(
                'username'=>$username,
                'email'=>$email,
                'password'=>$passHash
            )
        );

        if($res) {
            $_SESSION['message']="Insert Succesfully";
            header("Location: login.php");
            exit();
        }else{
            header("Location: index.php");
            exit();
        }
    }


}