<?php

session_start();
//var_dump($_POST['user_id']);
//var_dump($_POST['password']);
if(isset($_POST['user_id']) && isset($_POST['password']))
{
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['id'] = $_POST['user_id'];
}
setcookie('book1', 'dsvcdsds');
setcookie('book2', 'dsvdsdsvds');
setcookie('book3', 'sfdsbsf');
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    Your Name is <?php echo $_SESSION['id'] ?>!
    Recently Viwed
    <?php
        foreach ($_COOKIE as $key => $value) {
            echo $key . ' ' . $value;
            echo '<br>';
        }
    ?>
    <form method="POST" action="out.php">
        <button type="submit">Log Out</button>
    </form>
</body>

</html>