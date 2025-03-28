<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array &$array, bool $order): void {
            // 昇順の場合 
            if($order){ 
                echo '「昇順にソートします。」<br>';
                sort($array);
            // 昇順ソート 
            } else {
            echo '「降順にソートします。」<br>';
            rsort($array);
            // 降順ソート 
            } 
        } 

            $nums = [15, 4, 18, 23, 10 ];
            
            //昇順
            sort_2way($nums, true);
            foreach ($nums as $num) {
                echo "$num<br>\n";
            }

            echo"<br>";

            sort_2way($nums,false);
            foreach ($nums as $num) {
            echo "$num<br>\n";
            }
        ?>
    </p>
</body>

</html>
