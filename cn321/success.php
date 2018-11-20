<?php
    include 'secure/connectdb.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <?php
                include 'header.php';
        ?>
        <div>
            <div>
                <?php
                    if($_GET['code'] == 1) {
                        echo '<div>สมัครสมาชิกเรียบร้อยเเล้วเดียวทำเเจ่้งเตือนทีหลัง</div>';
                    }
                ?>
                <?php
                    if($_GET['code'] == 2) {
                        echo '<div>หน้านี้สำหรับสมาชิกเท่านั้น กรุณาลงทะเบียน</div>';
                    }
                ?>

            </div>
        </div>
        <?php
                include 'right.php';
        ?>

    </div>
</body>
</html>