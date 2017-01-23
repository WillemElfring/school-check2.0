<?php
$sql = "SELECT * FROM schools";
$homeResult = $mysqli->query($sql);
//echo $sql;
$homeResult = convertResultToArray($homeResult);

