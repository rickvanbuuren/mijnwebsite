<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26-5-2018
 * Time: 13:37
 */

switch(gethostname()){
    case 'rickvb.nl':
        $rootFolder = ''; break;
    case 'Rick-PC':
        $rootFolder = '/mywebsite'; break;
    default:
}

//session_start();

?>

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo right"><i class="material-icons">cloud</i></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="<?= $rootFolder ?>/index.php">Home</a></li>

            <!--     denk aan github links voor in about me       -->
            <li><a href="<?= $rootFolder ?>/pages/projects.php">About me</a></li>

            <li><a href="<?= $rootFolder ?>/pages/projects.php">Projects</a></li>

        </ul>
        <div class="page-name">

        </div>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
                if(!isset($_SESSION['u_id'])){?>
                    <li><a href="<?= $rootFolder ?>/pages/login.php">Login</a></li>
                <?php }
                else { ?>
                    <li><a href="<?= $rootFolder ?>/includes/logout.inc.php">Logout</a></li>
                <?php } ?>

        </ul>
    </div>
</nav>

<div class="page-title header">
    <h2>Rick van Buuren</h2>
</div>
