<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 1-6-2018
 * Time: 14:50
 */

session_start();

//Check if there is a request submit
if(isset($_POST['submit'])){

    //include database password and name
    include 'dbh.inc.php';

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    //Check if the login form is empty
    if(empty($email) || empty($password)){
        header("Location: ../pages/login.php?signup=empty");
        exit();
    }else{
        //check if a valid email is entered
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../pages/login.php?signup=email");
            exit();
        }else{

            $sql = "SELECT * FROM admins WHERE u_id='$email' OR email='$email';";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);

            //check if the result has data
            if($resultCheck < 1){
                header("Location: ../pages/login.php?login=error");
                exit();
            }else{
                if ($row = mysqli_fetch_assoc($result)){
                    $hashedPwdCheck = password_verify($password, $row['password']);
                    //check if password is hashed
                    if($hashedPwdCheck == false){
                        header("Location: ../pages/login.php?login=errorpassword");
                        exit();
                    }elseif ($hashedPwdCheck == true){
                        //set session variables
                        $_SESSION['u_id'] = $row['u_id'];
                        $_SESSION['u_email'] = $row['email'];
                        $_SESSION['u_role'] = $row['role'];
                        header("Location: ../pages/login.php?login=succes");
                        exit();
                    }
                }
            }
        }
    }
}else{
    header("Location: ../pages/login.php?login=error");
    exit();
}