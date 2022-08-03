<?php
include "connect.php";

$username=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_BCRYPT);

$try="SELECT * FROM users WHERE  email=".$email." ";

