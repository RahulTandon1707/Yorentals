<?php
session_start();
include_once "connection.php";
$Brand = $_POST ['Brand'];
    $insertQuery = "INSERT INTO `twowheelers`(`Brand`) VALUES ('$Brand')";
    if (mysqli_query($con, $insertQuery)) {
        echo "<script>
            alert('Brand Added Successfully.');
            window.location.href='addtwowheelerbrand.php'
            </script>";
    } else {
        echo "Enter the values again.";
    }
?>

