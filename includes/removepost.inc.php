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
    include_once 'dbh.inc.php';

    $post_id = mysqli_real_escape_string($connection, $_GET['remove']);

    $sql = "DELETE FROM images WHERE content_id='$post_id';";

    if(!mysqli_query($connection, $sql)){
        echo 'Error description: ' . mysqli_error($connection);
    }

    echo $post_id;
    $sql = "DELETE FROM content WHERE id='$post_id';";

    if(!mysqli_query($connection, $sql)){
        echo 'Error description: ' . mysqli_error($connection);
    }

    header("Location: ../pages/controlpanel.php?postremoved=succes");
    exit();

}else{
    echo 'Please login';
}