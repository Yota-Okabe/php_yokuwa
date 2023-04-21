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
    print('phpを勉強中');
    echo 'phpを勉強中です';

    print("phpを勉強中");
    echo "phpを勉強中です" . "\n";

    print('I\'m studying' . "\n");

    print('1行目');
    print("\n");
    print('1行目');
    ?>
</pre><br>

<pre>
<p><?php print('よくわかるphpを勉強中') ?></p>
<a href="<?php print('http://h2o-space.com'); ?>">
タグの属性にphpを埋め込んだ
</a>
</pre>
</main>
</body>
</html>



