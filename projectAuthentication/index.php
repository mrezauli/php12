<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>

<body>
    <?php
    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
        echo 'Hey!' . $_SESSION['id'] . ', youre logged In!';
    } else {
    ?>
    <form method="POST" action="profile.php">

        <label for="user_id">User ID:</label>
        <input id="user_id" type="text" name="user_id">

        <label for="password">Password:</label>
        <input id="password" type="password" name="password">

        <button type="submit">Log In</button>
    </form>
    <?php
    }
    ?>


</body>

</html>