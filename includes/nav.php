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
        <a href="#" class="brand-logo right">
            <i class=""></i>
        </a>

        <ul id="nav-mobile" class="left">
            <li><a href="<?= $rootFolder ?>/index.php">Home</a></li>

            <!--     denk aan github links voor in about me       -->
            <li><a href="<?= $rootFolder ?>/pages/aboutme.php">About me</a></li>

            <li><a href="<?= $rootFolder ?>/pages/projects.php">Projects</a></li>
            <?php
            if(isset($_SESSION['u_id'])){?>
            <li><a href="<?= $rootFolder ?>/pages/controlpanel.php">Controlpanel</a></li>
            <?php } ?>

        </ul>
        <div class="page-name diagonal-lines">
                <div></div>
                <div></div>
                <div></div>
        </div>

        <ul id="nav-mobile" class="right">
            <?php
                if(!isset($_SESSION['u_id'])){?>
                    <li style="position: relative;z-index: 99;"><a href="<?= $rootFolder ?>/pages/login.php">Login</a></li>
                <?php }
                else { ?>
                    <li style="position: relative;z-index: 99;"><a href="<?= $rootFolder ?>/includes/logout.inc.php">Logout</a></li>
                <?php } ?>

        </ul>
    </div>
</nav>

<div class="header clearfix">
    <h2 class="blink_me">Rick van Buuren</h2>
</div>
