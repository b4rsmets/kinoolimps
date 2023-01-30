<?php
$sql="SELECT * FROM seans ORDER BY time_movie";
$query=$connect->query($sql);
if($query->num_rows) {
  while ($row = $query->fetch_assoc()) {
    $seanses[] = $row;
  }
}


