<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>よくわかるphpの教科書</title>
</head>

<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>ファイルアップロードを受信する</h2>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <input type="text" name="ok">
        写真：<input type="file" name="picture">
        <input type="submit" value="送信">
    </form>
</main>
</body>
</html>



