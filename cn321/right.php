<div>
    <?php
        if (isset($_SESSION['is_member'])) {
    ?>
    <div>
        <h3>ข้อมูลทั่วไป</h3>
        <p>
            ยินดีต้องรับคุณ <?php echo $_SESSION['login_username']; ?>
        </p>
    </div>
    <?php } ?>

    <?php
    $sql2 = "SELECT * FROM tbnewstype";
    $res_newstype = mysqli_query($dbcon, $sql2);
    ?>
    <div>
        <h3>หมวดข่าว</h3>
        <ul>
        <?php
            while ($row_newstype = mysqli_fetch_assoc($res_newstype)) {
            ?>
            <li><a href="news.php?newstype_id=<?php echo $row_newstype['newstype_id']; ?>"><?php echo $row_newstype['newstype_detail']; ?></a></li>
        <?php } ?>
        </ul>
    </div>
</div>