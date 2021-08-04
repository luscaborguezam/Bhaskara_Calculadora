<?php
function insert_db($a_vlr, $b_vlr, $b_vlr, $c_vlr, $delta_vlr, $x1_vlr, $v2_vlr)
{
$mysqli = new mysqli("localhost", "root", "", "bd_bhaskara");
  $sqlstr = "insert into tb_calculo (a, b, c, delta, x1, x2) values ($a_vlr,$b_vlr,$c_vlr,$delta_vlr,$x1_vlr,$x2_vlr)";
  mysqli_query($mysqli, $sqlstr);
}
?>