<?php
    include 'connectdb.php';
    $newstype_id = $_POST['newstype'];
    $news_topic = $_POST['news_topic'];
    $news_detail = $_POST['news_detail'];
    $news_status = $_POST['news_status'];
    //upload image
    $image_ext = pathinfo(basename($_FILES['news_filename']['name']), PATHINFO_EXTENSION);
    $new_image_name = 'news_'.uniqid().".".$image_ext;
    $image_path = "../news_image/";
    $image_upload_path = $image_path.$new_image_name;
    $success = move_uploaded_file($_FILES['news_filename']['tmp_name'],$image_upload_path);
    if ($success==false) {
        echo "ไม่สามารถ upload รูปภาพได้";
        exit();
    }    

    // insert data
    $sql = "INSERT INTO tbnews (news_topic,news_detail,news_filename,news_status,news_date,newstype_id)";
    $sql .= "VALUES ('$news_topic','$news_detail','$new_image_name','$news_status',NOW(),'$newstype_id')";

    $result = mysqli_query($dbcon, $sql);

    if ($result) {
        header("Location: main.php");
        // echo "บันทึกข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }