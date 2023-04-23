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

$fix = sprintf('%d', 10) . "\n";
echo $fix;
$g = sprintf('%d', 'abc') . "\n";
echo $g;
$h = sprintf('%s', 'abc') . "\n";
echo $h;
$i = sprintf('%05d', '10') . "\n";
echo $i;

$date = sprintf('%04d年 %02d月 %02d日' , 2018, 1, 23);
echo $date;

?>
</pre>
</main>
</body>
</html>



