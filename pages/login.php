<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26-5-2018
 * Time: 13:35
 */


//if(isset($_SESSION['u_id'])){
//    header("Location: ../pages/controlpanel.php");
//    exit();
//}

if(isset($_GET['login'])){
    $loginAttempt = $_GET['login'];
    if($loginAttempt == 'succes'){
        header("Location: ../pages/controlpanel.php");
        exit();
    }
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

<div class="container custom-margin">
    <div class="row">
        <form class="col s12" action="../includes/loginform.inc.php" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" autocomplete="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" id="password" type="password" autocomplete="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="submit">Login
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
