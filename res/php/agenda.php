<?php

error_reporting(E_ALL);
require './shared.php';
//if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
//    header('location: ../../index.html');
//} else {

$link = mysqli_connect($host, $user, $password, $database);
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$inpd = $_REQUEST['inpd'];
$sql="select std_id,name,ph1,ph2,email from student where schedule='$inpd'";
$result1 = mysqli_query($link, $sql);
if (mysqli_num_rows($result1) > 0) {
    $table = array();
    // output data of each row
    while ($rows = mysqli_fetch_assoc($result1)) {
//        echo json_encode($rows);
        $data = new stdClass();
        $data->std_id = $rows['std_id'];
        $data->name = $rows['name'];
        $data->ph1 = $rows['ph1']; 
        $data->ph2 = $rows['ph2'];
        $data->email = $rows['email']; //1
         $table[] = $data;
    }
    echo json_encode($table);
}
else{
    echo "none";
}