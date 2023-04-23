<?php
    session_start();
    $_SESSION['session_message'] = 'セッションに値を保存した';
?>

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
<h2>セッションに値を保存</h2>
<pre>
セッションに値を保存しました。次のページに異動して確認しよう。
&raquo;<a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>



