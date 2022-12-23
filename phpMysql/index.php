<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "phonebook";

$connection = mysqli_connect($hostname, $username, $password, $database);

$sql = "SELECT * FROM contacts;";

$queryResult = mysqli_query($connection, $sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="createdb.php">Create DB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="createtable.php">Create Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="create.php">CREATE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = $queryResult->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo md5($row['sl']);?>
                            </th>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['number'];?></td>
                            <td>
                                <form action="update.php" method="POST">
                                    <input name="sl" value="<?php echo $row['sl'];?>" hidden />
                                    <button type="submit" class="btn btn-info">Update</button>
                                </form>
                                <form action="delete.php" method="POST">
                                    <input name="sl" value="<?php echo $row['sl'];?>" hidden />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
mysqli_close($connection);
?>