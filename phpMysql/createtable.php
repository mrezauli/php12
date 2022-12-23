<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "phonebook";

$connection = mysqli_connect($hostname, $username, $password, $database);

$sql = "CREATE TABLE contacts
(
    sl int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(30),
    number int UNIQUE
);";

mysqli_query($connection, $sql);

echo "Success!!";

mysqli_close($connection);