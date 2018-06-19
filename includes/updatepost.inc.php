<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 2-6-2018
 * Time: 12:37
 */

if(!isset($_SESSION['u_id'])){
    session_start();
}

if(isset($_SESSION['u_id'])){
    include_once 'dbh.inc.php';

    $post_id = mysqli_real_escape_string($connection, $_POST['post_id']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $image = mysqli_real_escape_string($connection, $_POST['image']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    $sql = "UPDATE images SET images.image = '$image' WHERE images.content_id = '$post_id'";

    if(!mysqli_query($connection, $sql)){
        echo 'Error description: ' . mysqli_error($connection);
    }

    $sql = "UPDATE content SET content.title = '$title', content.description = '$description' WHERE content.id = '$post_id'";

    if(!mysqli_query($connection, $sql)){
        echo 'Error description: ' . mysqli_error($connection);
    }

    header("Location: ../pages/controlpanel.php?postupdate=succes");
    exit();

}else{
    echo 'Please login';
}