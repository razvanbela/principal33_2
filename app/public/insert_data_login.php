<?php
include "connect.php";
global $pdo;

$username=$_POST['name'];
$password=$_POST['password'];

$hash=password_hash($password,PASSWORD_BCRYPT);

$sql="SELECT id,name,email,password FROM users WHERE name='$username'";



if(password_verify($password,$hash)){
    echo 'Password Verified';
}else{
    echo 'Incorrect Password';
}