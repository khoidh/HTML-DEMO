/**
 * Created by PhpStorm.
 * User: khoidh
 * Date: 4/18/2018
 * Time: 11:29 AM
 */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>passing var</title>
</head>
<body>
    <h1>Chuyền biến từ php sang javaScript</h1>
    <?php
        $m='hello';
    ?>

    <script>
        var m1=<?php echo json_encode($m);?>;
        alert(m1);
    </script>
</body>
</html>