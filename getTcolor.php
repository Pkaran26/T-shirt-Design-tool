<?php
require_once('include/conn.php');
$ob = new Connect();
$tid = $_POST['tid'];
$tshirts = $ob->select_data2("select * from tcolor where tid = '$tid'");
if($tshirts->num_rows>0){
    while($row = $tshirts->fetch_array()){
        echo '<img class="tsc" tcid="'.$row[0].'" tprice="'.$row[3].'" width="75px;" src="'.$row[4].'" />';
    }
}
?>