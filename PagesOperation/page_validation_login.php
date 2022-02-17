<?php
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];
if (empty($email)) {
    header('location:../index.php?error=Enter email please');
} else if (empty($password)) {
    header('location:../index.php?error=Enter password please');
} else {
    include('connexion.php');
    $users = $mysql->prepare("SELECT * FROM comptes WHERE email='$email' AND password='$password'");
    $users->execute();
    $user = $users->fetch();
    $user_name = $user['username'];
    $user_email = $user['email'];
    $user_password = $user['password'];
    $name_imgU = $user['img_name'];
    $data_img = $user['img_data'];
    // validation password 
    //  $number = preg_match('@[0-9]@', $password);
    //  $uppercase = preg_match('@[A-Z]@', $password);
    //  $lowercase = preg_match('@[a-z]@', $password);
    //  $specialChars = preg_match('@[^\w]@', $password);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:../index.php?error=invalid format email');
    }
    //      else if(strlen($password) < 8 ||  !$number || !$uppercase  || !$lowercase ||  !$specialChars){
    //         header('location:../index.php?error=Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character');
    //    }
              
    else if ($email === $user_email && $password === $user_password) {
        $_SESSION['user_name'] =  $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_password'] = $user_password;
        $_SESSION['img_name'] = $name_img;
        $_SESSION['img_data'] = $data_img; 
        if(isset($_POST['check'])){
            setcookie('user',$_SESSION['user_email'],time()+3600,'/');
            setcookie('user_p',$_SESSION['user_password'],time()+3600,'/');
        }
        header('location:../page-Acceuill.php'); 
    } 
    else {
        header('location:../index.php?error=password or email is incorrect');
    }
}

 
