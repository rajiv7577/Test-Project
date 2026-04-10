<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/config.php';
require_once '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$captcha  = $_POST['captcha'];

if($captcha != $_SESSION['captcha']){
die("Invalid Captcha");
}

$query = "SELECT * FROM admins WHERE username='$username'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){

$row = mysqli_fetch_assoc($result);

if(password_verify($password,$row['password'])){

$_SESSION['admin_id'] = $row['admin_id'];
$_SESSION['username'] = $row['username'];

header("Location: dashboard.php");
exit;

}else{
echo "Invalid Password";
}

}else{
echo "Invalid Username";
}