<?php
    session_start();
    //แฉพาะสมาชิก
    if (!isset($_SESSION['is_member'])) {
        // header("Location: frm_register.php");
        header("Location:success.php?code=2");
    }
    //แฉพาะสมาชิก
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
        <?php include 'header.php'; ?>
        <div>
            <div>
                สำหรับสมาชิก
            </div>
        

        <?php include 'right.php'; ?>
        </div>
    </div>

</body>
</html>