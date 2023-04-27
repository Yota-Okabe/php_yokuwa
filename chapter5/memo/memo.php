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
<?php

// $memos = $db->query('SELECT * FROM memos WHERE id=1');
// $memo = $memos->fetch();
$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
$memos->execute(array($_REQUEST['id']));
$memo = $memos->fetch();

?>
<article>
    <pre><?php echo$memo['memo']; ?></pre>
    <a href="index.php">戻る</a>
</article>
</main>
</body>
</html>



