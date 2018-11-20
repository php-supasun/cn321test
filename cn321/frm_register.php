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

                <form action="register.php" method="post">
                    <h3>ลงทะเบียน</h3>
                    <input type="text" placeholder="User Name" name="username" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="submit" value=" สมัครสมาชิก ">
                </form>


            </div>
        </div>
        <?php
                include 'right.php';
        ?>

    </div>
  
</body>
</html>