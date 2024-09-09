<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, $order = 'asc') {
            if ($order === 'asc') {
                sort($array); 
                echo "昇順にソートします。<br>" . implode("<br>", $array) . "<br>";
            } elseif ($order === 'desc') {
                rsort($array); 
                echo "降順にソートします。<br>" . implode("<br>", $array) . "<br>";
            }
        }

        sort_2way($nums, 'asc'); 
        sort_2way($nums, 'desc'); 
        ?>
    </p>
</body>

</html>