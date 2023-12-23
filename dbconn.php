<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ditgroup_servicesdb";

$conne = new mysqli($servername, $username, $password, $database);

if(!$conne) {
    echo "connection failed";
}
else
{
    header("Location: contact.html?=connection successful");
}

?>