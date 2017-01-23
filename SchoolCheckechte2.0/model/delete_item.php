<?php

$sql = "DELETE from schools WHERE id=$id";

$link = 'index.php?action=admin';
echo "item deleted<br>";
echo "<a href='".$link."'>Index Page</a>";


$mysqli->query($sql);