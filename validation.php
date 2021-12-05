<?php
session_start();


$con = mysqli_connect('localhost', 'testuser', '@egdstudy0305', 'testdb');

$name = $_POST['user'];
$pass = $_POST['password'];
$name = mysqli_real_escape_string($con, $name);
$pass = mysqli_real_escape_string($con, $pass);
$s = "SELECT * FROM usertable WHERE name = '$name' AND password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num > 0){
    $_SESSION['username'] = $name;
    header('location:home.php');
    
}else {
    echo "<script>alert('Đăng nhập thất bại.')</script>";
    header('location:index.php');
}
?>