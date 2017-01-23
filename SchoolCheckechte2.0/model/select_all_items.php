<?php

$sql = "SELECT * from schools";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);