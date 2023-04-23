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
<h2>ファイルアップロードを受信する</h2>

<?php
$file = $_FILES['picture'];
?>
ファイル名（name）<?php echo $file['name']; ?><br>
ファイルタイプ（type））<?php echo $file['type']; ?><br>
アップロードされたファイル（tmp_name））<?php echo $file['tmp_name']; ?><br>
エラー内容（error））<?php echo $file['error']; ?><br>
サイズ（size））<?php echo $file['size']; ?><br>

<?php
$ext = substr($file['name'], -4);
if ($ext == '.gif' || $ext == '.jpg' || $ext == '.png'):
    $filePath = './user_img/' . $file['name'];
    $success = move_uploaded_file($file['tmp_name'], $filePath);
    if ($success):
?>
<img src="<?php echo $filePath; ?>">
    <?php else: ?>
ファイルアップロード失敗
    <?php endif; ?>
<?php else: ?>
.gif, .jpg, .png のいずれかのファイルでアップロードしてください
<?php endif ?>

</main>
</body>
</html>



