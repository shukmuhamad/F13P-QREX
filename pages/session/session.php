<?php
session_start();

$conn = new PDO("sqlsrv:Server=172.16.10.202;Database=F13P_QREX", "sa", "qait2020");
$session_BadgeID = $_SESSION['BadgeID'];
$session_Name=$_SESSION['Name'];
$session_Position=$_SESSION['Position'];
$session_RoleKey=$_SESSION['RoleKey'];
$session_Password=$_SESSION['Password'];


if (!isset($session_BadgeID)) {

    $conn=null;
    header('Location:../../login.php');
}
?>
