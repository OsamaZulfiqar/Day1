<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php
    require_once("config.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['name']) && isset($_POST['regno'])) {
            $name = $_POST['name'];
            $regno = $_POST['regno'];
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $q1 = $_POST['q1'];

             $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
            if (mysqli_connect_error()) {
                die(mysqli_connect_error());
            }

            $sql = "INSERT INTO student (Name, Brand , Manufacturing , Expiry , Quantity) VALUES ('$name', '$regno', '$date1','$date2', '$q1')";
            mysqli_query($connection, $sql);
            if(mysqli_error($connection)) {
                die("Something went wrong! Check your Database");
            }
            mysqli_close($connection);
        }
    }
    ?>

</head>
<body>
<div class="container col-md-5">
<?php 
header("Location: students.php"); /* Redirect browser */
exit();
?>
 </div>
</body>
</html>