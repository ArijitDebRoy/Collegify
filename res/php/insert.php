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


$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$counselor = mysqli_real_escape_string($link, $_REQUEST['counselor']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$addr = mysqli_real_escape_string($link, $_REQUEST['addr']);
$ph1 = mysqli_real_escape_string($link, $_REQUEST['ph1']);
$ph2 = mysqli_real_escape_string($link, $_REQUEST['ph2']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$cllg = mysqli_real_escape_string($link, $_REQUEST['cllg']);
$board = mysqli_real_escape_string($link, $_REQUEST['board']);
    
$ixs4 = mysqli_real_escape_string($link, $_REQUEST['ixs4']);
$ixs5 = mysqli_real_escape_string($link, $_REQUEST['ixs5']); 
$ixs6 = mysqli_real_escape_string($link, $_REQUEST['ixs6']);
$ixs7 = mysqli_real_escape_string($link, $_REQUEST['ixs7']);
$ixs8 = mysqli_real_escape_string($link, $_REQUEST['ixs8']);
$ixp1 = mysqli_real_escape_string($link, $_REQUEST['ixp1']);
$ixp2 = mysqli_real_escape_string($link, $_REQUEST['ixp2']);
$ixp3 = mysqli_real_escape_string($link, $_REQUEST['ixp3']);
$ixp4 = mysqli_real_escape_string($link, $_REQUEST['ixp4']);
$ixp5 = mysqli_real_escape_string($link, $_REQUEST['ixp5']);
$ixp6 = mysqli_real_escape_string($link, $_REQUEST['ixp6']);
$ixp7 = mysqli_real_escape_string($link, $_REQUEST['ixp7']);
$ixp8 = mysqli_real_escape_string($link, $_REQUEST['ixp8']);
    
$xs4 = mysqli_real_escape_string($link, $_REQUEST['xs4']);
$xs5 = mysqli_real_escape_string($link, $_REQUEST['xs5']); 
$xs6 = mysqli_real_escape_string($link, $_REQUEST['xs6']);
$xs7 = mysqli_real_escape_string($link, $_REQUEST['xs7']);
$xs8 = mysqli_real_escape_string($link, $_REQUEST['xs8']);
$xp1 = mysqli_real_escape_string($link, $_REQUEST['xp1']);
$xp2 = mysqli_real_escape_string($link, $_REQUEST['xp2']);
$xp3 = mysqli_real_escape_string($link, $_REQUEST['xp3']);
$xp4 = mysqli_real_escape_string($link, $_REQUEST['xp4']);
$xp5 = mysqli_real_escape_string($link, $_REQUEST['xp5']);
$xp6 = mysqli_real_escape_string($link, $_REQUEST['xp6']);
$xp7 = mysqli_real_escape_string($link, $_REQUEST['xp7']);
$xp8 = mysqli_real_escape_string($link, $_REQUEST['xp8']);
    
$xis4 = mysqli_real_escape_string($link, $_REQUEST['xis4']);
$xis5 = mysqli_real_escape_string($link, $_REQUEST['xis5']); 
$xis6 = mysqli_real_escape_string($link, $_REQUEST['xis6']);
$xis7 = mysqli_real_escape_string($link, $_REQUEST['xis7']);
$xis8 = mysqli_real_escape_string($link, $_REQUEST['xis8']);
$xip1 = mysqli_real_escape_string($link, $_REQUEST['xip1']);
$xip2 = mysqli_real_escape_string($link, $_REQUEST['xip2']);
$xip3 = mysqli_real_escape_string($link, $_REQUEST['xip3']);
$xip4 = mysqli_real_escape_string($link, $_REQUEST['xip4']);
$xip5 = mysqli_real_escape_string($link, $_REQUEST['xip5']);
$xip6 = mysqli_real_escape_string($link, $_REQUEST['xip6']);
$xip7 = mysqli_real_escape_string($link, $_REQUEST['xip7']);
$xip8 = mysqli_real_escape_string($link, $_REQUEST['xip8']);
    
$xiis4 = mysqli_real_escape_string($link, $_REQUEST['xiis4']);
$xiis5 = mysqli_real_escape_string($link, $_REQUEST['xiis5']); 
$xiis6 = mysqli_real_escape_string($link, $_REQUEST['xiis6']);
$xiis7 = mysqli_real_escape_string($link, $_REQUEST['xiis7']);
$xiis8 = mysqli_real_escape_string($link, $_REQUEST['xiis8']);
$xiip1 = mysqli_real_escape_string($link, $_REQUEST['xiip1']);
$xiip2 = mysqli_real_escape_string($link, $_REQUEST['xiip2']);
$xiip3 = mysqli_real_escape_string($link, $_REQUEST['xiip3']);
$xiip4 = mysqli_real_escape_string($link, $_REQUEST['xiip4']);
$xiip5 = mysqli_real_escape_string($link, $_REQUEST['xiip5']);
$xiip6 = mysqli_real_escape_string($link, $_REQUEST['xiip6']);
$xiip7 = mysqli_real_escape_string($link, $_REQUEST['xiip7']);
$xiip8 = mysqli_real_escape_string($link, $_REQUEST['xiip8']);
 
$gdate = mysqli_real_escape_string($link, $_REQUEST['gdate']); 
$gp = mysqli_real_escape_string($link, $_REQUEST['gp']); 
$gstrm = mysqli_real_escape_string($link, $_REQUEST['gstrm']); 
$pgdate = mysqli_real_escape_string($link, $_REQUEST['pgdate']); 
$pgp = mysqli_real_escape_string($link, $_REQUEST['pgp']); 
$pgstrm = mysqli_real_escape_string($link, $_REQUEST['pgstrm']); 
$exam = mysqli_real_escape_string($link,implode(',', $_POST['exam'])); 
$tarea = mysqli_real_escape_string($link, $_REQUEST['tarea']); 
$major = mysqli_real_escape_string($link, $_REQUEST['major']); 
$dest = mysqli_real_escape_string($link, implode(',', $_POST['dest']));
$Q1 = mysqli_real_escape_string($link, $_REQUEST['Q1']);
$Q2 = mysqli_real_escape_string($link, $_REQUEST['Q2']); 
$ans = mysqli_real_escape_string($link, $_REQUEST['ans']); 



function udate($format = 'u', $utimestamp = null) {
        if (is_null($utimestamp))
            $utimestamp = microtime(true);

        $timestamp = floor($utimestamp);
        $milliseconds = round(($utimestamp - $timestamp) * 1000000);

        return date(preg_replace('`(?<!\\\\)u`', $milliseconds, $format), $timestamp);
    }



date_default_timezone_set("Asia/Kolkata");
$dat=udate("h:i:s.u");



$fin="CLG";
$dat=substr($dat,0,13);
$time = preg_replace("/[^a-zA-Z0-9]+/", "", $dat);
$bldate = preg_replace("/[^a-zA-Z0-9]+/", "", $date);
$bldate=substr($bldate,4);
$std_id=$fin . $bldate . $time ;

$sql="INSERT INTO `student`(`std_id`, `counselor`, `name`, `addr`, `ph1`, `ph2`, `email`, `cllg`, `board`, `gdate`, `gp`, `gstream`, `pgdate`, `pgp`, `pgstream`, `exam`, `tarea`, `major`, `dest`, `q1`, `q2`, `ans`, `date`) VALUES ('$std_id','$counselor','$name','$addr','$ph1','$ph2','$email','$cllg','$board','$gdate','$gp','$gstrm','$pgdate','$pgp','$pgstrm','$exam','$tarea','$major','$dest','$Q1','$Q2','$ans','$date')";

$result = mysqli_query($link,$sql);
//echo "$result";
//echo "$sql";




// $status=new emailApproval();
//$status->mail_status($sname,$semail,$consign_no,'Registered');


			  
 $sql1="INSERT INTO `ix`(`std_id`, `overall`, `eng`, `math`, `s4`, `s5`, `s6`, `s7`, `s8`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES ('$std_id','$ixp1','$ixp2','$ixp3','$ixs4','$ixs5','$ixs6','$ixs7','$ixs8','$ixp4','$ixp5','$ixp6','$ixp7','$ixp8')";
//echo $sql1;
mysqli_query($link,$sql1);
//echo "$result1";
//echo "$sql1";
$sql2="INSERT INTO `x`(`std_id`, `overall`, `eng`, `math`, `s4`, `s5`, `s6`, `s7`, `s8`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES ('$std_id','$xp1','$xp2','$xp3','$xs4','$xs5','$xs6','$xs7','$xs8','$xp4','$xp5','$xp6','$xp7','$xp8')";
mysqli_query($link,$sql2);
//echo "$result1";
//echo "$sql2";
$sql3="INSERT INTO `xi`(`std_id`, `overall`, `eng`, `math`, `s4`, `s5`, `s6`, `s7`, `s8`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES ('$std_id','$xip1','$xip2','$xip3','$xis4','$xis5','$xis6','$xis7','$xis8','$xip4','$xip5','$xip6','$xip7','$xip8')";
mysqli_query($link,$sql3);
//echo "$result1";
//echo "$sql3";
$sql4="INSERT INTO `xii`(`std_id`, `overall`, `eng`, `math`, `s4`, `s5`, `s6`, `s7`, `s8`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES ('$std_id','$xiip1','$xiip2','$xiip3','$xiis4','$xiis5','$xiis6','$xiis7','$xiis8','$xiip4','$xiip5','$xiip6','$xiip7','$xiip8')";

//echo "$result1";
//echo "$sql4";
  if(mysqli_query($link,$sql4))
  {
      echo "Student registration no. is ".$std_id;
  }
else
{
    echo "Someting went wrong!";
}
      
		


 mysqli_close($link);
?>