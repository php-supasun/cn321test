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
    <div>
        <h1>เข้าสู่ระบบ</h1>
        <form action="login.php" method="post">
            <div>
                <input type="text" name="username" placeholder="Username" required autofocus="">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" value="login">
            </div>
        </form>
        <br>
        <a href="../index.php">กลับหน้าหลัก</a>
    </div>
</body>
</html>