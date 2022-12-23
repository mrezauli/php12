<?php

$name = filter_var($_POST['name'], FILTER_UNSAFE_RAW);
$number = filter_var($_POST['number'], FILTER_VALIDATE_INT);

$hostname = "localhost";
$username = "root";
$password = "";
$database = "phonebook";

$connection = mysqli_connect($hostname, $username, $password, $database);

$sql = "INSERT INTO contacts (name, number)
VALUES
( '" . $name . "' , " . $number . ");";


mysqli_query($connection, $sql);

echo "Success!!";

mysqli_close($connection);