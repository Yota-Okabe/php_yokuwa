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

$day = date('n/j(D)');
echo $day . "\n";

$time = time();
echo $time . "\n";

$day = date('n/j(D)' , 86400);
echo $day . "\n";

$ieyasu = strtotime('1543/1/31');

$day_after_tomorrow = strtotime('today');
$day = date('n/j(D)' , $day_after_tomorrow);
echo $day . "\n";

for ($i=1; $i <+ 31 ; $i++) { 
    // $timestamp = strtotime('+' . $i . 'day');
    // $day = date('n/j(D)' , $timestamp);
    $day = date('n/j(D)' , strtotime('+' . $i . 'day'));
    echo $day . "\n";
}

$j = 1;
while($j <= 30){
    $day = date('n/j(D)' , strtotime('+' . $j . 'day'));
    echo $day . "\n";
    $j++;
}


?>
</pre>
</main>
</body>
</html>



