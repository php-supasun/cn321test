<?php
    include 'session.php';
    require 'connectdb.php';
    $sql = "SELECT * FROM tbnews INNER JOIN tbnewstype ON tbnews.newstype_id=tbnewstype.newstype_id ORDER BY news_id DESC";
    $res_news = mysqli_query($dbcon,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ยินดีต้อนรับ</h1>
    <p>คุณ <?php echo $s_login_username; ?> อีเมล์: <?php echo $s_login_email; ?></p>

    <h1>เมนูหลัก</h1>
    <p>
        <a href="frm_news.php">เพิ่มข่าว</a>
    </p>
    <br>
    <table style="border:1px solid red">
        <tr>
            <td>รหัสข่าว</td>
            <td>หัวข้อข่าว</td>
            <td>สถานะ</td>
            <td>วันที่ประกาศ</td>
            <td>ไฟล์เเนบ</td>
            <td>ประเภทข่าว</td>
            <td>เเก้ไข</td>
            <td>ลบข่าว</td>
        </tr>
        <?php
            while ($row_news = mysqli_fetch_assoc($res_news)) {
        ?>
        <tr>
            <td><?php echo $row_news['news_id']; ?></td>
            <td><?php echo $row_news['news_topic']; ?></td>
            <td><?php 
                    if ($row_news['news_status'] == 0) {
                        echo 'ข่าวปกติ';
                    } else {
                        echo 'ข่าวเด่น';
                    }
            ?>
            </td>
            <td><?php echo $row_news['news_date']; ?></td>
            <td><a href="../news_image/<?php echo $row_news['news_filename']; ?>" target="_blank"><?php echo $row_news['news_filename']; ?></a></td>
            <td><?php echo $row_news['newstype_detail']; ?></td>
            <td><a href="frm_update_news.php?id=<?= $row_news['news_id']; ?>">เเก้ไข</a></td>
            <td><a href="delete_news.php?id=<?= $row_news['news_id']; ?>">ลบ</a></td>

        </tr>
        <?php } ?>
    </table>
    <hr>
    <a href="logout.php">ออกจากระบบ</a>
</body>
</html>