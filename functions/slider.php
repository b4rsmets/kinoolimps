<?php
$sql="SELECT * FROM settings";
$query=$connect->query($sql);
if($query->num_rows) {
  while ($row = $query->fetch_assoc()) {
    $sliders[] = $row;
  }
}


