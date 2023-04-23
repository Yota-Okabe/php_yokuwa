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

$fruits = ['林檎', '葡萄', '檸檬', '蕃茄', '桃'];
echo $fruits[1] . "\n";

$fruits2 = [
    'apple'=>'林檎',
    'grape'=>'葡萄',
    'lemon'=>'檸檬',
    'tomato'=>'蕃茄',
    'peach'=>'桃'
];

foreach ($fruits2 as $key => $value) {
    echo $key . '：' . $value . "\n";
}

$hardware = [
    'win'=>'windows',
    'mac'=>'Macintosh',
    'iphone'=>'iPhone',
    'ipa'=>'iPad',
    'android'=>'Android'
];

foreach ($hardware as $key => $value) {
    echo $key . '：' . $value . "\n";
}

?>
</pre>
</main>
</body>
</html>



