<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        echo json_encode([
            'data' => $_POST['data'],
            'succes' => true
        ], JSON_THROW_ON_ERROR);
    } catch (JsonException $exception) {
        $d = $_POST['data'];
        $sql = "SELECT  id_users, data FROM reservation WHERE data='" . $d . "'";
        $res = $pdo->query($sql);

        while ($row = $res->fetch()) {
            $user = $row['id_users'];
            $sql2 = "SELECT  name, email  FROM users WHERE id='" . $user . "'";
            $res2 = $pdo->query($sql2);
            $row_u = $res2->fetch();

            echo $row_u['name'] + $row_u['email'] + $row_u['phone'];
        }
    }
}