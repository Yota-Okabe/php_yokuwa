<?php

try {
    $db = new PDO('mysql:dbname=yokuwaka;host=localhost;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo 'DB接続エラー：' . $e->getMessage();
}
$memos = $db->query('SELECT * FROM memos ORDER BY id DESC');

?>