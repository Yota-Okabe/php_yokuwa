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

$i = 1;
while ($i <= 15) {
    print($i . "\n");
    $i++;
}

$j =1;
print($j). "\n";
$j = $j + 1;
print($j). "\n";
$j = $j + 1;
print($j). "\n";

for ($i=1; $i <= 10; $i++) { 
    print($i). "\n";
}

$a = 10;
while ($a >= 0) {
    print($a) . "\n";
    $a--;
}



?>
</pre>
</main>
</body>
</html>



