<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 15-6-2018
 * Time: 15:31
 */

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
            <div class="col s6">
                <img class="responsive-img" src="<?= $rootFolder?>/images/me.jpg">
            </div>
            <div class="col s6">
                <div class="row">
                    <div class="col s12">
                        I am Rick van Buuren
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <ul>
                            <li>Age</li>
                            <li>Address</li>
                            <li>E-mail</li>
                            <li>Phone</li>
                        </ul>
                    </div>
                    <div class="col s8">
                        <ul>
                            <li>22</li>
                            <li>Foreest 20</li>
                            <li>rickvanb10@gmail.com</li>
                            <li>0640291683</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-card-bottom ">
            <div class="col s12">
                <p class="">
                    hello
                </p>
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
