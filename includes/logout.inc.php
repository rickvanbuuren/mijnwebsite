<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 2-6-2018
 * Time: 13:37
 */

if (!isset($_SESSION))
{
    session_start();
    session_unset();
    session_destroy();
}


header("Location: ../index.php");
exit();