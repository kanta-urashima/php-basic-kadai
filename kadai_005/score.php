<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編課題</title>
    </head>

    <body>
        <p>
            <?php
            echo 'score'.'1' . 80;
            echo '<br>';
            echo 'score'.'2' . 60;
            echo '<br>';
            echo 'score'.'3' . 55;
            echo '<br>';
            echo 'score'.'4'  . 40;
            echo '<br>';
            echo 'score'.'5'  . 100;
            echo '<br>';
            echo 'score'.'6' . 25;
            echo '<br>';
            echo 'score'.'7' . 80;
            echo '<br>';
            echo 'score'.'8' . 95;
            echo '<br>';
            echo 'score'.'9' . 30;
            echo '<br>';
            echo 'score'.'10' . 60;
            echo '<br>';
            //合計点
            echo '合計点' . 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60; 
            echo '<br>';
            //平均点
            echo '平均点' . 625 / 10
?>
        </p>
    </body>
</html>