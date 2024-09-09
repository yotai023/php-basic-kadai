<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way($array, $order = 'asc') {
          if ($order === 'asc') {
              sort($array); 
          } elseif ($order === 'desc') {
              rsort($array); 
          }
          return $array;
      }
      
      $sorted_asc = sort_2way($nums, 'asc');
      echo "昇順にソートします。<br>" . implode("<br>", $sorted_asc) . "<br>";
      
      $sorted_desc = sort_2way($nums, 'desc');
      echo "降順にソートします。<br> " . implode("<br>", $sorted_desc);
        ?>
    </p>
</body>

</html>