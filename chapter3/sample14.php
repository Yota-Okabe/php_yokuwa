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



$doc = file_get_contents('./news_date/news.text');
$doc .= "<br />2023-04-24 ニュースを追加しました";
file_put_contents('./news_date/news.text' , $doc);
readfile('./news_date/news.text');


?>
</pre>
</main>
</body>
</html>



