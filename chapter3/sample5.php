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
print(100+1050+200) . "\n";
print((100+1050+200) * 1.10) . "\n";

$sum = 100+1050+200;
print($sum). "\n";
print($sum * 1.10) . "\n";

$tax = 1.10;
print($sum * $tax) . "<br>";

$sum = 8 + 2;
print($sum) . "\n";
print("合計は $sum 円です");

?>

合計金額は：<?php print($sum); ?>円です<br>
税込金額は：<?php print($sum * 1.10); ?>円です<br>
</pre>
</main>
</body>
</html>



