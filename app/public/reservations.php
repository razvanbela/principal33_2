<?php

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if(isset($_POST['date'])){
    $date=$_POST['date'];

    $sql = "SELECT id_users,id_location, data_start FROM reservation WHERE data_start=".$date."";
    $res = $pdo->query($sql);

  while($row=$res->fetch()) {
      $user=$row['id_users'];
  }

}
