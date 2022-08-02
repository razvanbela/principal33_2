<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'root', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function reservationQuery(){
    try {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $reservationData=$_POST['data'];
            $id_user=$_POST['id_users'];
            $id_location=$_POST['id_location'];
            global $pdo;
            $stmt=$pdo->prepare("SELECT * FROM reservation WHERE data =:reservationData AND id_location=:id_location AND id_users=:id_user");
        $stmt->bindParam(":reservationData",$reservationData);
        $stmt->bindParam(":id_location",$id_location);
        $stmt->bindParam(":id_user",$id_user);
        $stmt->execute();
        $row=$stmt->fetch();
        $stmt=null;
        if($row!=null){
            $stmt=$pdo->prepare("INSERT INTO `reservation`(`data`,`id_users`,`id_location`) VALUES (:resrvationData,:id_user,:id_location)");
        $stmt->bindParam(":reservationData",$reservationData);
        $stmt->bindParam(":id_user",$id_user);
        $stmt->bindParam(":id_location",$id_location);
        $stmt->execute();
        }
        }
    }catch (Exception $exception){
        echo $exception->getMessage();
    }
}