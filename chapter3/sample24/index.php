<?php

    $value = '変数に保存した値';
    setcookie('save_message', 'Cookieに保存した値', time() + 60 * 60 * 12);

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
<h2>Cookieに値を保存する</h2>
<pre>
Cookieに値を保存しました。次のページに移動してみましょう。
&raquo; <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>



