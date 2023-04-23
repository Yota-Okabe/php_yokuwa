<?php

    $email  = 'yota.tksoccer@gmail.com';
    mb_language('japanese');
    mb_internal_encoding('UTF-8');

    $from = 'yota.okabe@gmail.com';
    $subject = 'よくわかるPHPの教科書';
    $body = 'このメールは『よくわかるPHPの教科書』から送信しています';
    
    $success = mb_send_mail($email, $subject, $body, $from);

?>

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
<h2>電子メールを送信する</h2>
<pre>
<?php if ($success) : ?>
電子メールを送信しました。メールボックスを確認してみてください。
<?php else : ?>
電子メールの送信に失敗しました。Webサーバーの設定などをご確認ください。
<?php endif; ?>
</pre>
</main>
</body>
</html>



