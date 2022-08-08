<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if($_SERVER['REQUEST_METHOD']==='POST'){
    try{
        echo json_encode([
            'reservDate'=>$_POST['reservDate'],
            'succes'=>true
        ], JSON_THROW_ON_ERROR);
    }catch (JsonException $exception){

    }
        $d=$_POST['reservDate'];
        $sql="SELECT id_users, id_location FROM reservation WHERE data='$d' ";
        $res=$pdo->query($sql);
        while($row=$res->fetch()){
            $id_user=$row['id_users'];
            $sql_u="SELECT id, username FROM users WHERE id= '.$id_user.' ";
            $res_u=$pdo->query($sql_u);
            $row_u=$res->fetch();
            echo "<div>".$row_u['username']."</div>";
        }

}