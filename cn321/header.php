<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>
    <nav class="container__header navbar shadow__line">
     
        <div class="col">
            <a href="index.php">coding thailand</a>
        </div>

        <div class="header__center col-md-auto">
            <a href="index.php">หน้าเเรก</a>
            <a href="news_all.php">ข่าวทั้งหมด</a>
            <a href="contact.php">ติดต่อเรา</a>
            <?php if (isset($_SESSION['is_member'])) { ?>
            <a href="logout.php">ออกจากระบบ</a>
            <?php } else { ?>
            <a href="secure/index.php">เข้าสู่ระบบ</a>
        </div>
        <div class="col-md-auto">
            <a href="frm_register.php"><button type="button" class="btn btn-outline-primary">Sign up</button></a>
        </div>
            <?php } ?>
    </nav>
