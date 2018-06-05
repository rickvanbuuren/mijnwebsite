<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 1-6-2018
 * Time: 16:07
 */

if(!isset($_SESSION['u_id'])){
    session_start();
}


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

<?php
if(!isset($_SESSION['u_id'])){
    echo '<h2>Please login as Admin to view the posts.</h2>';
}else{
?>

    <div class="container custom-margin">
        <div class="row">
            <h2>CONTROL PANEL</h2>
            <a href="addpost.php">Add a post</a>
        </div>

        <div class="row">
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
                    <li>
                        <form class="col s12 post-form" action="../includes/updatepost.inc.php" method="POST">
                            <a href="../includes/removepost.inc.php?remove=<?= $post['id']; ?>">Remove <?= $post['title'] ;?></a>
                            <div class="row">
                                <h1>
                                    <label for="title">Title</label>
                                    <input name="title" id="title" type="text" autocomplete="title" class="validate" value="<?= $post['title']; ?>"
                                </h1>
                            </div>
                            <div class="row">
                                <label for="image">Image</label>
                                <input name="image" id="image" type="text" autocomplete="image" class="validate" value="<?= $post['image']; ?>">
                            </div>
                            <div class="row">
                                <img src="../images/<?= $post['image']; ?>">
                            </div>
                            <div class="row">
                                <p>
                                    <label for="description">Description</label>
                                    <input name="description" id="description" type="text" autocomplete="image" class="validate" value="<?= $post['description']; ?>"
                                </p>
                            </div>

                            <input name="post_id" id="post_id" type="hidden" value="<?= $post['id']; ?>" hidden>

                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="submit">Update
                                    <i class="material-icons right">backup</i>
                                </button>
                            </div>
                        </form>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php } ?>

</body>
</html>
