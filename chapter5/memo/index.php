<?php require('dbconnect.php') ?>

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
<article>

<?php
if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    $page = 1;
}
$start = 5 * ($page - 1);
$memos = $db->prepare('SELECT * FROM memos ORDER BY id LIMIT ?, 5');
$memos->bindParam(1, $start, PDO::PARAM_INT);
$memos->execute();
?>
<?php while ($memo = $memos->fetch()): ?> 
    <?php if ((mb_strlen($memo['memo'])) > 50): ?>
        <p><a href="memo.php?id=<?php echo $memo['id']; ?>"><?php echo mb_substr($memo['memo'], 0, 50); ?>...</a></p>
    <?php else: ?>
        <p><a href="memo.php?id=<?php echo $memo['id']; ?>"><?php echo $memo['memo']; ?></a></p>
    <?php endif; ?>
    <time><?php echo $memo['created_at']; ?></time>
    <hr>
<?php endwhile; ?>

<?php if ($page >= 2): ?>
    <a href="index.php?page=<?php echo $page-1; ?>"><?php echo $page-1 ?>ページ目へ</a>
<?php endif; ?>
    |
<?php
$counts = $db->query('SELECT COUNT(*) AS cnt FROM memos');
$count = $counts->fetch();
$max_page = ceil($count['cnt'] / 5);
if ($page < $max_page) :
?>
    <a href="index.php?page=<?php echo $page+1; ?>"><?php echo $page+1 ?>ページ目へ</a>
<?php endif; ?>
</article>

<!-- 以下は上記プログラミングを三項演算子で記述したもの -->
<?php /*while ($memo = $memos->fetch()): ?> 
    <p>
        <a href="memo.php?id=<?php echo $memo['id']; ?>">
        <?php echo mb_substr($memo['memo'], 0, 50); ?>
        <?php echo (mb_strlen($memo['memo']) > 50 ? '...' : ''); ?>
        </a>
    </p>
    <time><?php echo $memo['created_at']; ?></time>
    <hr>
<?php endwhile; */?> 

    
<?php
// 以下は、データ接続の練習
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

    // $records = $db->query('SELECT * FROM my_items');
    // while ($record = $records->fetch()) {
    //     echo $record['item_name'] . "\n";
    //     echo $record['id'] . "\n";
    //     echo $record['maker_id'] . "\n";
    //     echo $record['sales'] . "\n";
    // }

    // $records2 = $db->query('SELECT COUNT(*) AS record_count FROM my_items');
    // $record2 = $records2->fetch();
    // echo '件数は' . $record2['record_count'] . '件です';
?>    

</main>
</body>
</html>



