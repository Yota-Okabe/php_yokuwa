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

$success = file_put_contents('../../../php_yokuwa_date/news2.text', '2023-04-23 ホームページをリニューアル');
if ($success) {
    echo 'ファイルへの書き込み完了';
}else {
    echo '書き込み失敗。フォルダの権限を確認してください';
}

?>
</pre>
</main>
</body>
</html>



