<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>よくわかるphpの教科書</title>
</head>

<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>practice</h2>
<pre>
<?php
    try {
        $db = new PDO('mysql:dbname=yokuwaka;host=localhost;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        echo 'DB接続エラー：' . $e->getMessage();
    }
    
    // $count = $db->exec('
    //     INSERT INTO
    //         my_items
    //     SET 
    //         maker_id=1,
    //         item_name="もも",
    //         price=210,
    //         keyword="缶詰,ピンク,甘い",
    //         sales=0,
    //         created="2023-04-27",
    //         modified="2023-04-27"
    // ');

    // $count = $db->exec('
    //     UPDATE
    //         my_items
    //     SET
    //         item_name="白桃"
    //     WHERE
    //         id=5
    // ');

//     $count = $db->exec('
//         DELETE FROM
//             my_items
//         WHERE
//             id=7
// ');

    $records = $db->query('SELECT * FROM my_items');
    while ($record = $records->fetch()) {
        echo $record['item_name'] . "\n";
        echo $record['id'] . "\n";
        echo $record['maker_id'] . "\n";
        echo $record['sales'] . "\n";
    }

    $records2 = $db->query('SELECT COUNT(*) AS record_count FROM my_items');
    $record2 = $records2->fetch();
    echo '件数は' . $record2['record_count'] . '件です';

?>
</pre>
</main>
</body>
</html>



