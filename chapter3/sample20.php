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

$age = '28';
$age= mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
    echo $age . '歳';
}else {
    echo '数字で入力してください';
}

?>
</pre>
</main>
</body>
</html>



