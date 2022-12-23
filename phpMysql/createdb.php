<?php

$hostname = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($hostname, $username, $password);

$sql = "CREATE DATABASE phonebook;";

mysqli_query($connection, $sql);

echo "Success!!";

mysqli_close($connection);