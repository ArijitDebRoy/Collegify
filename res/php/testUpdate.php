<?php

require './shared.php';
//require './class.emailApproval.php';
//if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
//    header('location: ../../index.html');
//} else {
    $link = mysqli_connect($host, $user, $password, $database);
//$link = mysqli_connect("localhost", "root", "", "courier");
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $std_id = mysqli_real_escape_string($link, $_REQUEST['std_id']);
    $schedule = mysqli_real_escape_string($link, $_REQUEST['schedule']);
//   echo $std_id;
//echo $schedule;
//date_default_timezone_set("Asia/Kolkata");
//$dat=date("h:i");
//if($id && $ship_status && $book_mode && $pick_date && $pick_time!="" )
//{
//$date=date("Y/m/d");
//    $sqlupt2 = "UPDATE trans_courier SET comments ='" . $comment . "' WHERE consign_no = '" . $cno . "'";
//    mysqli_query($link, $sqlupt2);
//    $sqlm = "SELECT ship_email FROM trans_courier  WHERE consign_no = '" . $cno . "'";
//    //echo $sqlupt2;
//
//    $result3 = mysqli_query($link, $sqlm);
//
//    $rows = mysqli_fetch_assoc($result3);
//    $semail = $rows['ship_email'];
////	$ship_office="kolkata";
    $sqlei = "update `student` set schedule='$schedule' where std_id='$std_id'";
//echo $sqlei;
    if (mysqli_query($link, $sqlei)) {
        echo " updated successfully!";
//        $status = new emailApproval();
//        $status->mail_status($name, $semail, $cno, $ship_status);
    } else {
        echo "Something went wrong.";
    }
    // echo $sqlei;
    // header('Location: all.php');
//}
    mysqli_close($link);
//}
?>