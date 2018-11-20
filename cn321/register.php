<?php
        require 'secure/connectdb.php';
        
        $login_username = $_POST['username'];
        $login_password = $_POST['password'];
        $login_email = $_POST['email'];
        
        if ($login_username == "admin") {
            echo "ห้ามใช้ username เป็น admin";
            exit;
        }
        //เข้ารหัส รหัสผ่าน
        $salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_login_password = hash_hmac('sha256', $login_password, $salt);
        
        $query = "INSERT INTO tblogin (login_username,login_password,login_email) VALUES ('$login_username','$hash_login_password','$login_email')";
        
        $result = mysqli_query($dbcon,$query);
        
        if ($result) {
            header("Location: success.php?code=1");
        } else {
            echo "เกิดข้อผิดพลาด ".  mysqli_error($dbcon);
        }
        
        mysqli_close($dbcon);