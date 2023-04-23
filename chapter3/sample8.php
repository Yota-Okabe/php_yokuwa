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

// echo date('w');
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
echo '今日は' . $week_name[date('w')] . '曜日';

?>
</pre>
</main>
</body>
</html>



