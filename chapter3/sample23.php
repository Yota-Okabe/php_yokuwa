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

<table>
    <?php
    for ($i=1; $i<=10 ; $i++) { 
        if ($i % 2) {
            echo '<tr style="background-color: #ccc">';
        }else {
            echo '<tr>';
        }
        echo '<td>' . $i . '行目</td>';
        echo '</tr>';
    }
    echo '<h3>' . '2023年5月のカレンダー' . '</h3>';
    $week = ['日', '月', '火', '水', '木', '金', '土'];
    for ($j=1; $j<=30 ; $j++) { 
        echo $j . '日（' . $week[$j%7] . '）<br />';
    }
    ?>
</table>

</main>
</body>
</html>



