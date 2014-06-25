<?php

//read the northwind database nworders
$host="localhost";
$username="pepe"; 
$password="pepe"; 
$db_name="pepe"; 
$con=mysql_connect("$host", "$username", "pepe")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql = "SELECT * FROM `kpi` ";
$sql1 = "SELECT * FROM `pasados` WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= date_col;";

$result = mysql_query($sql);
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
    echo mysql_error();
}

$data = array();
while ($row = mysql_fetch_array($result)) {
extract ($row);
$data[] = array((FLOAT)$produccion);

}

$array2[] = json_encode($data);
echo json_encode($data);
?>


