<?php
$current_date = date("Y-m-d");
$sql = "DELETE FROM seans WHERE date_movie != '$current_date'";

if ($connect->query($sql) === TRUE) {
} else {
}
$connect->close();
?>

