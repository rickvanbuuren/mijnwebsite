<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 2-6-2018
 * Time: 12:03
 */

//if(!isset($_SESSION['u_id'])){
//    session_start();
//}

?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../includes/head.php')
    ?>
</head>


<?php
include_once ('../includes/nav.php')
?>

<body>
    <div class="container custom-margin">
<!--        <h2>Projects</h2>-->
        <ul class="posts">
            <?php

            include '../includes/dbh.inc.php';

            $posts = [];
            $sql_GetAllPosts = "SELECT content.*, images.image, images.content_id FROM content INNER JOIN images ON content.id = images.content_id";
            $allPosts = mysqli_query($connection, $sql_GetAllPosts);

            while($row = mysqli_fetch_assoc($allPosts)){
                $posts[] = $row;
            }

            foreach($posts as $key => $post){
                ?>
                <li class="post">
                    <h2><?= $post['title']; ?></h2>
                    <div ><img src="../images/<?= $post['image'] ?>"></div>
                    <p> <?= $post['description']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>

</body>
</html>