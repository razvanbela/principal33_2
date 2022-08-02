<?php

$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if(isset($_POST['resDate'])){
    $dateStart=$_POST['resDate'];

    $sql = "SELECT id_users,id_location, data_start FROM reservation WHERE data_start=".$dateStart."";
    $res = $pdo->query($sql);

  while($row=$res->fetch()) {
      $user=$row['id_users'];

      $sqlUser="SELECT id,name,email FROM users WHERE id='".$user."'";
      $resUser=$pdo->query($sqlUser);
      $rowUser=$resUser->fetch();
      echo $row['name'] + $row['data-start'];
  }

}
