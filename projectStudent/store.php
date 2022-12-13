<?php

$searchedName = $_POST['student_name'];

$student_names = ['kalam', 'balam', 'salam'];

if (in_array($searchedName, $student_names)) {
    echo '<h1>Found!</h1>';
} else {
    echo '<h1>Not Found!</h1>';
}