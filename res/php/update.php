<?php
error_reporting(E_ALL);
require './shared.php';
//require './class.emailApproval.php';

//if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
//    header('location: ../../index.html');
//} else {

//$link = mysqli_connect("localhost", "id2382352_id2382352_root", "ENQUIRYbizcal", "id2382352_id2382352_courier");
//$link = mysqli_connect("localhost", "root", "", "courier");
$link = mysqli_connect($host, $user, $password, $database);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//echo "hello";
	$sid=$_REQUEST['update'];
//echo $sid;
//$id_1='FC01150';
//echo 'hellop';
if($sid!="")
	{
	$sqli = "SELECT std_id,name,schedule FROM student WHERE std_id= '$sid'";
	//echo $sqli;
	$result2 = mysqli_query($link,$sqli);
	while($rows= mysqli_fetch_assoc($result2)){
    //echo $rows['consign_no'];
     $table = array();

            $data = new stdClass();
            $data->std_id = $rows['std_id'];
            $data->name = $rows['name']; 
            $data->schedule = $rows['schedule']; 
          
     $table[] = $data;
       echo json_encode($table);
    }
}
mysqli_close($link);
//}
?>
