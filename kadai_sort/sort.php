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
        function sort_2way($array,bool $order) {
            if($order === true) {
                echo "昇順にソートします。<br>";
                sort($array);
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順
        sort_2way($nums, true);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }

        // 降順
        sort_2way($nums, false);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }

        
        ?>
    </p>
</body>

</html>