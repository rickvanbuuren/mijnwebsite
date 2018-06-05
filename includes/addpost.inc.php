<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 1-6-2018
 * Time: 14:50
 */

if(!isset($_SESSION['u_id'])){
    session_start();
}

if(isset($_SESSION['u_id'])){
    if(isset($_POST['submit'])){
        include_once 'dbh.inc.php';

        $u_id = mysqli_real_escape_string($connection, $_POST['u_id']);
        $title = mysqli_real_escape_string($connection, $_POST['title']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);

        $sql = "INSERT INTO content (title, description) VALUES ('$title','$description');";

        if(!mysqli_query($connection, $sql)){
            echo 'Error description: ' . mysqli_error($connection);
        }

        $id = $connection->insert_id;

        var_dump($id);

        $msg = '';

        $image = $_FILES['image']['name'];

        $target = "../images/".basename($image);

        $sql_uploadImage = "INSERT INTO images (image, content_id) VALUES ('$image', '$id')";

        if(!mysqli_query($connection, $sql_uploadImage)){
            echo 'Error description: ' . mysqli_error($connection);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

        header("Location: ../pages/controlpanel.php?post=succes");
        exit();


    }
}else{
    echo 'Please login';
}
