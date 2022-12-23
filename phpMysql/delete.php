<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "phonebook";

$connection = mysqli_connect($hostname, $username, $password, $database);

$sql = "DELETE FROM contacts
WHERE sl = " . $_POST['sl'] .";";

mysqli_query($connection, $sql);

echo "Success!!";

mysqli_close($connection);