<?php
session_start();
error_reporting(E_ALL);
require './shared.php';
$con = mysqli_connect($host, $user, $password, $database);
 // Starting Session
//$error=''; // Variable To Store Error Message
//if (isset($_POST['submit'])) {
if (empty($_REQUEST['userid']) || empty($_REQUEST['pass'])) {
echo "Please enter your user ID and Password!";
}
else
{

$email=$_REQUEST['userid'];
   // echo $email;
$password=$_REQUEST['pass'];


$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);
$password= md5($password);
   // echo $password;
$sql="select * from user where pass='$password' AND email='$email'";
$query = mysqli_query($con,$sql);
    //echo $sql;
if (mysqli_num_rows($query) == 1) {
   while($rows = mysqli_fetch_assoc($query)){
//echo $rows['name'];
$_SESSION['login_user']=$rows['name'];
//echo $_SESSION['login_user'];
    die('true');
} 
}else {
echo "Username or Password is invalid";
}
}
//}

?>