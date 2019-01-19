<html>
<?php
$conn=Mysqli_connect("localhost","root","","mydata");
if($conn)
    echo "Connected";
else
    echo "Not connected";

?>