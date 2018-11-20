<?php
        include 'connectdb.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เพิ่มข่าว</title>
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
    <h1>เพิ่มข่าว</h1>
    <form id="form1" action="insert_news.php" method="post" enctype="multipart/form-data">
        <label for="newstype">เลือกประเภทข่าว</label>
        <select name="newstype">
            <option value="">--กรุณาเลือกประเภทข่าว--</option>
            <?php
                $sql_newstype = "SELECT * FROM tbnewstype";
                $res_newstype = mysqli_query($dbcon, $sql_newstype);
                while ($row_newstype = mysqli_fetch_assoc($res_newstype)) {
                    echo '<option value="'.$row_newstype['newstype_id'].'">'.$row_newstype['newstype_detail'].'</option>';
                }
            ?>
            
        </select>
        <label for="news_topic">หัวข้อข่าว</label>
        <input type="text" name="news_topic" required>
        <label for="news_detail">เนื้อหาข่าว</label>
        <textarea name="news_detail" id="news_detail" rows="10" cols="80">
        
        </textarea>
        <label for="news_filename">ภาพประกอบข่าว</label>
        <input type="file" name="news_filename">
        <label for="news_status">สถานะข่าว</label>
        <input type="radio" value="0" checked name="news_status">ข่าวทั่วไป <br>
        <input type="radio" value="1" name="news_status">ข่าวเด่น
        <br>
        <input type="submit" value="บันทึก">
    </form>
</body>
</html>