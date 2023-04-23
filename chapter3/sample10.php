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

    if (date('G') < 9) {
        echo '現在はうつけ時間外です';
    }
    $x = 0;
    if (!$x) {
        echo $x . "\n";
    }

    if (date('G') < 9) {
        echo '営業時間外';
    }else {
        echo 'いらっしゃいませ';
    }
    

?>
</pre>
</main>
</body>
</html>



