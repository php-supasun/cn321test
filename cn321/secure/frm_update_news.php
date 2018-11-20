<?php
        include 'connectdb.php';
        
        $news_id = $_GET['id'];
        $sql = "SELECT * FROM tbnews WHERE news_id='$news_id'";
        $res_news = mysqli_query($dbcon,$sql);
        $row_news = mysqli_fetch_assoc($res_news)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เเก้ไขข่าว</title>
    <style>
        label {
            display: block;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>เเก้ไขรายละเอียดข่าว รหัส <?php echo $news_id; ?></h1>
    <form id="form1" action="update_news.php" method="post" enctype="multipart/form-data">
        <label for="newstype">เลือกประเภทข่าว</label>
        <select name="newstype">
            <option value="">--กรุณาเลือกประเภทข่าว--</option>
            <?php
                $sql_newstype = "SELECT * FROM tbnewstype";
                $res_newstype = mysqli_query($dbcon, $sql_newstype);
                while ($row_newstype = mysqli_fetch_assoc($res_newstype)) {
                    if ($row_newstype['newstype_id'] == $row_news['newstype_id']) {
                        echo '<option value="'.$row_newstype['newstype_id'].'" selected>'.$row_newstype['newstype_detail'].'</option>';
                    } else {
                        echo '<option value="'.$row_newstype['newstype_id'].'">'.$row_newstype['newstype_detail'].'</option>';
                    }
                    
                }
            ?>
            
        </select>
        <label for="news_topic">หัวข้อข่าว</label>
        <input type="text" name="news_topic" value="<?php echo $row_news['news_topic']; ?>" required>
        <label for="news_detail">เนื้อหาข่าว</label>
        <textarea name="news_detail" id="news_detail" rows="10" cols="80">
        <?php echo $row_news['news_detail']; ?>
        </textarea>
        <a href="../news_image/<?php echo $row_news['news_filename']; ?>" target="_blank"><?php echo $row_news['news_filename']; ?></a>
        <img src="../news_image/<?php echo $row_news['news_filename']; ?>" width="100px" height="100px">

        <label for="news_filename">ภาพประกอบข่าว</label>
        <input type="file" name="news_filename">
        <label for="news_status">สถานะข่าว</label>
        <?php
            if ($row_news['news_status'] == 0) {
                echo '<input type="radio" value="0" checked name="news_status">ข่าวทั่วไป <br>';
                echo '<input type="radio" value="1" name="news_status">ข่าวเด่น';
            } else {
                echo '<input type="radio" value="0" name="news_status">ข่าวทั่วไป <br>';
                echo '<input type="radio" value="1" checked name="news_status">ข่าวเด่น';
            }
        ?>
        <input type="hidden" name="news_id" value="<?php echo $row_news['news_id'] ?>">
        <br>
        <input type="submit" value="บันทึก">
    </form>
</body>
</html>