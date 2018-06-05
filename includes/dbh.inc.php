<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 1-6-2018
 * Time: 14:45
 */

$dbsevername = 'localhost';
$dbusername = 'root';
$dbpassword = '123';
$dbname = 'mywebsite';

$connection = mysqli_connect($dbsevername, $dbusername, $dbpassword, $dbname);

if ($connection->connect_error){
    die("Connection failed " . $connection->connect_error);
}else{
    echo "";
}