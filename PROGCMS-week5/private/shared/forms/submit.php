<?php

include '../../../private/path.php';
include '../../db/connect.php';


$str = "INSERT INTO post (post)
        VALUES ('{$_POST['post']}')";

$result = $PDO->query($str);

$result = $PDO->query(
    "SELECT post FROM post ORDER BY id DESC"
);

foreach ($result as $row) {
    print($row['post'] . '<br>');
};