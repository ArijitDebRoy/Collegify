<?php
error_reporting(E_ALL);
require './shared.php';
$link = mysqli_connect($host, $user, $password, $database);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//echo "hello";
	$sid=$_REQUEST['del'];
//echo $sid;
//$id_1='FC01150';
//echo 'hellop';
if($sid!="")
	{
	$sql1 = "delete FROM student WHERE std_id= '$sid'";
    $sql2 = "delete FROM ix WHERE std_id= '$sid'";
    $sql3 = "delete FROM x WHERE std_id= '$sid'";
    $sql4 = "delete FROM xi WHERE std_id= '$sid'";
    $sql5 = "delete FROM xii WHERE std_id= '$sid'";
	//echo $sqli;
    if(mysqli_query($link,$sql1) && mysqli_query($link,$sql2) && mysqli_query($link,$sql3) && mysqli_query($link,$sql4) && mysqli_query($link,$sql5)){
        echo "true";
    }else{
        echo "false";
    }
    }
mysqli_close($link);
//}
?>
