<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //　ソート関数
        function sort_2way(bool $order,$array) {
            if($order === true) {
                echo "昇順にソートします。<br>";
                sort($array);
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            foreach ($array as $array) {
            echo $array . '<br>';
            }
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        //　ソート
        sort_2way(true, $nums);
        sort_2way(false, $nums);
        ?>
    </p>
</body>

</html>