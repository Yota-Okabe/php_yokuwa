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

$xmlTree = simplexml_load_file('https://h2o-space.com/feed');

foreach($xmlTree->channel->item as $item) :
?>
・<a href="<?php print($item->link); ?>"><?php print($item->title); ?></a>
<?php
endforeach;
?>

</pre>
</main>
</body>
</html>



