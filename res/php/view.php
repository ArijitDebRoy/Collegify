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
$search = $_REQUEST['search'];
$start = $_REQUEST['start'];
$end = $_REQUEST['end'];
//$date = $_REQUEST['filter_date_by'];

$date_param = "";

if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $search)) {
    $date_param = "OR (date ='".$search."')";
} else {
    $date_param = "";
}


/* form */
$sqli = "SELECT s.*,a.overall as ix,b.overall as x,c.overall as xi,d.overall as xii FROM student s,ix a,x b,xi c,xii d where s.std_id=a.std_id AND s.std_id=b.std_id AND s.std_id=c.std_id AND s.std_id=d.std_id ";

if ($search != "") {
    $sqli .= " AND ((name like '%" . $search . "%') OR (cllg like '%" . $search . "%') OR (ph1 like '%" . $search . "%') OR (s.std_id ='$search') OR (email like '%" . $search . "%') OR (ph2 like '%" . $search . "%') OR (a.overall like '%" . $search . "%') OR (b.overall like '%" . $search . "%') OR (c.overall like '%" . $search . "%') OR (d.overall like '%" . $search . "%') OR (counselor like '%" . $search . "%')".$date_param.")";
} elseif ($start && $end != "") {
    $sqli .= " AND date BETWEEN '$start' and '$end' ";
}

$sqli .= " ORDER BY date DESC";
//echo $sqli;
$result1 = mysqli_query($link, $sqli);



if (mysqli_num_rows($result1) > 0) {
    $table = array();
    // output data of each row
    while ($rows = mysqli_fetch_assoc($result1)) {
//        echo json_encode($rows);
        $data = new stdClass();
        $data->std_id = $rows['std_id'];
        $data->date1 = $rows['date'];
        $data->name = $rows['name']; 
        $data->counselor = $rows['counselor'];
        $data->addr = $rows['addr']; //1
        $data->ph1 = $rows['ph1']; //2
        $data->ph2 = $rows['ph2']; //3
        $data->email = $rows['email']; //4
        $data->cllg = $rows['cllg']; //5
        $data->board = $rows['board'];
        $data->ix = $rows['ix'];
        $data->x = $rows['x'];
        $data->xi = $rows['xi'];
        $data->xii = $rows['xii'];//6
        $data->gdate = $rows['gdate']; //7
        $data->gp = $rows['gp']; //8
        $data->gstream = $rows['gstream']; //9
        $data->pgdate = $rows['pgdate']; //10
        $data->pgp = $rows['pgp']; //11
        $data->pgstream = $rows['pgstream']; //12
        $data->exam = $rows['exam']; //13
        $data->tarea = $rows['tarea']; //14
        $data->major = $rows['major'];
        $data->dest = $rows['dest'];
        $data->q1 = $rows['q1'];
        $data->q2 = $rows['q2'];
        $data->ans = $rows['ans'];
//        $data->ship_addr = $rows['ship_building'] . ' , ' . $rows['ship_street'] . ' , ' . $rows['ship_po'] . ' , ' . $rows['ship_city'] . ' , ' . $rows['ship_state'] . ' , PIN - ' . $rows['ship_pin'];
//
//        $data->rev_name = $rows['rev_name'];
//        $data->rev_phone = $rows['rev_phone'];
//        $data->rev_email = $rows['rev_email'];
//        $data->rev_addr = $rows['rev_building'] . ' , ' . $rows['rev_street'] . ' , ' . $rows['rev_po'] . ' , ' . $rows['rev_city'] . ' , ' . $rows['rev_state'] . ' , PIN - ' . $rows['rev_pin'];

        $table[] = $data;
    }
    echo json_encode($table);
}
else{
    echo "none";
}
//}