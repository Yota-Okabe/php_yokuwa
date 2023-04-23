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

// echo 'お名前：' . htmlspecialchars($_GET['my_name'], ENT_QUOTES) . "\n";
// echo 'メッセージ：' . htmlspecialchars($_GET['message'], ENT_QUOTES);

?>

<dl>
    <dt>お名前</dt>
    <dd><?php echo htmlspecialchars($_GET['my_name'], ENT_QUOTES); ?></dd>
    <dt>メッセージ</dt>
    <dd><?php echo htmlspecialchars($_GET['message'], ENT_QUOTES); ?></dd>
</dl>



</main>
</body>
</html>



