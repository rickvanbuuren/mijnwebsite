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
    echo '<h2>Please login as Admin to Post a project.</h2>';
}else{
    ?>
    <div class="container custom-margin">
    <h2>ADD A POST</h2>

    <form class="col s12" id="postform" action="../includes/addpost.inc.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s12">
                <input name="title" id="title" type="text" autocomplete="title" class="validate">
                <label for="title">Title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input style="margin-left: 50px;" name="image" id="image" type="file" autocomplete="image" class="validate">
                <label for="image">Image</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                    <textarea name="description" form="postform" id="description" class="materialize-textarea"></textarea>
                    <label for="description">Description</label>
            </div>
        </div>

        <input name="u_id" id="u_id" type="hidden" autocomplete="title" class="validate" value="<?php $_SESSION['u_id'] ?>" hidden>
        <input name="size" type="hidden" value="1000000" hidden>

        <div class="row">
            <button style="background-color: #48adcc;" class="btn waves-effect waves-light" type="submit" name="submit">Post
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <?php } ?>
</body>

</html>
