<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 15-6-2018
 * Time: 15:31
 */

if(!isset($_SESSION['u_id'])){
    session_start();
}

switch(gethostname()){
    case '.com':
        $rootFolder = ''; break;
    case 'Rick-PC':
        $rootFolder = '/mywebsite'; break;
    default:
}
//    echo $rootFolder;
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../includes/head.php');
    ?>
</head>
<body>

<?php
include_once ('../includes/nav.php');
?>

<section class="aboutme">
    <div class="container">
        <div class="row my-card remove-margin-bottom">
            <div class="col s12 m6">
                <img style="padding: 20px 20px;" class="responsive-img" src="<?= $rootFolder?>/images/me.jpg">
            </div>
            <div style="padding: 20px;" class="col s12 m6">
                <div class="row remove-margin-bottom">
                    <div class="col s12">
                        <i class="material-icons chat-icon">chat_bubble</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div style="font-size: 30px;">I'm <b>Rick van Buuren</b></div>
                        <div>Front-end and back-end developer</div>
                    </div>
                </div>
                <div style="border-top: 1px solid; margin-right: 17px;" class="row my-info">
                    <div class="col s4">
                        <ul class="">
                            <li>Age</li>
                            <li>E-mail</li>
                            <li>Phone</li>
                        </ul>
                    </div>
                    <div class="col s8">
                        <ul>
                            <li>22</li>
                            <li>rickvanb10@gmail.com</li>
                            <li>+31 640291683</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-card-bottom" >
            <div class="col s12">
                <ul class="clearfix" style="width: 130px;margin: 0px auto;">
                    <li style="margin-top: 5px; margin-right: 30px;">
                        <a href="https://www.facebook.com/rickvanb10"><img style="height: 27px;" src="<?= $rootFolder?>/icons/f-ogo_RGB_HEX-58.png"></a>
                    </li>
                    <li style="margin-top: 5px;">
                        <a href="https://github.com/rickvanbuuren"> <img style="height: 27px;" src="<?= $rootFolder?>/icons/GitHub_Logo.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
include_once ('../includes/footer.php')
?>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
