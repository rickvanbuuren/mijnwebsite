<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 15-6-2018
 * Time: 13:25
 */

switch(gethostname()){
    case 'rickvb.nl':
        $rootFolder = ''; break;
    case 'Rick-PC':
        $rootFolder = '/mywebsite'; break;
    default:
}

?>



<section class="homepage clearfix">
    <img class="background-img responsive-img" src="<?= $rootFolder?>/images/1030-1.png">
    <div class="container responsive-img">
        <div class="row homepage-content">
            <div class="col s12">
                <p class="">
                    Hello, my name is Rick van Buuren</br>
                    I'm a Front-end and Back-end developer
                </p>
            </div>
        </div>
    </div>
</section>
