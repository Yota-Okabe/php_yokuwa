<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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

    print('現在は ' . date('G時 i分 s秒') . ' です' . "\n");
    print("現在は date('G時 i分 s秒') です" . "\n");
    print(date('s秒'));
    print(date('i分' . "\n"));
    print(date('G'));
    print('時');
    print(date('i'));
    print('分');
    print(date('s'));
    print('秒' . "\n");

    print('今日は' . date('Y年 n月 j日') . 'です');


?>
</pre>
</main>
</body>
</html>



