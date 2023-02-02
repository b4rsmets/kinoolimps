<?php
$current_date = date("Y-m-d");
$sql = "DELETE FROM seans WHERE date_movie != '$current_date'";

if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
$connect->close();
?>

