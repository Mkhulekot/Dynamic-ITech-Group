<?php
include("dbconn.php");
function validate($userdata)
{
    $data = trim($userdata);
    $data = stripslashes($userdata);
    $data = htmlspecialchars($userdata);
    return $userdata;
}

$surname = validate($_POST['surname']);
$names = validate($_POST['firstname']);
$phone = validate($_POST['phone']);
$email = validate($_POST['email']);
$service = validate($_POST['service']);
$servicedesc = validate($_POST['message']);

$sql = "INSERT INTO customer (surname, names, phone, email, req_service, descript) 
VALUES('$surname', '$names', '$phone', '$email', '$service', '$servicedesc');";

mysqli_query($connection, $sql);
header("Location: contact.html?=form submitted successfully");
?>