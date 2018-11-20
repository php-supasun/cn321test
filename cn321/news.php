<?php
    session_start();
    include 'secure/connectdb.php';
    $newstype_id = $_GET['newstype_id'];

    // Limit2 คือเเสดงเเค่2ข่าว
    $sql = "SELECT * FROM tbnews INNER JOIN tbnewstype ON tbnews.newstype_id=tbnewstype.newstype_id "
    . "WHERE tbnews.newstype_id='$newstype_id' ORDER BY news_id DESC";
    $res_news = mysqli_query($dbcon,$sql);
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
            <?php
                while ($row_news = mysqli_fetch_assoc($res_news)) {
            ?>
                <article>
                    <h1><a href="#"><?php echo $row_news['news_topic']; ?></a></h1>
                    <p><?php echo $row_news['news_date']; ?><a href="#"><?php echo $row_news['newstype_detail']; ?></a></p>
                    <p><a href="#"><img src="./news_image/<?php echo $row_news['news_filename']; ?>" alt="not found" style="width:50px;height:50px"></a></p>
                    <p><?php echo $row_news['news_detail']; ?></p>
                    <h2>header1</h2>
                    <p>test4test4test4test4test4test4test4test4</p>
                    <p>
                        <button><a>continue</a></button>
                        <button><a>4comment</a></button>
                    </p>
                </article>
                <?php } ?>
            </div>
        </div>

        <?php include 'right.php'; ?>

    </div>
</body>
</html>