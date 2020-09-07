<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
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
    $sid = $name = $regno = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_GET['id'])) {
            echo "id is not set";
            return;
        } else if (empty($_GET['id'])) {
            echo "id is empty";
            return;
        } else {
            $sid = $_GET['id'];
            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
            if (mysqli_connect_error()) {
                die(mysqli_connect_error());
            }

            $sql = "SELECT * FROM student WHERE id = $sid";

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            $name = $row['Name'];
            $regno = $row['Brand'];
            $date1 = $row['Manufacturing'];
            $date2 = $row['Expiry'];
            $q1 = $row['Quantity'];

            if (mysqli_error($connection)) {
                die("Something went wrong! Check your Database");
            }
            mysqli_close($connection);
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['name']) && isset($_POST['regno'])) {
            $sid = $_POST['id'];
            $name = $_POST['name'];
            $regno = $_POST['regno'];
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $q1 = $_POST['q1'];
            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
            if (mysqli_connect_error()) {
                die(mysqli_connect_error());
            }
            //echo $name . " is ready to update! with id: " . $sid;
            $sql = "UPDATE student SET Name = '$name', Brand = '$regno' , Manufacturing= '$date1' , Expiry='$date2' , Quantity='$q1' WHERE id = $sid";
            mysqli_query($connection, $sql);
            if(mysqli_error($connection)) {
                die("Something went wrong! Check your Database");
            }
            echo "Student record updated successfully!";
            mysqli_close($connection);
        }
    }

    ?>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$sid?>">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Product Name" value="<?=$name?>">
        </div>
        <div class="form-group">
            <label for="regno">Brnand Name</label>
            <input type="text" name="regno" class="form-control" id="regno" placeholder="Brand Name." value="<?=$regno?>">
        </div>
        <div class="form-group">
            <label for="regno"> Manufacturing date</label>
            <input type="text" name="date1" class="form-control" id="date1" placeholder="Manufacturing Date" value="<?=$date1?>">
        </div>
        <div class="form-group">
            <label for="regno">Expiry Date</label>
            <input type="text" name="date2" class="form-control" id="date2" placeholder="Expiry Date" value="<?=$date2?>">
        </div>
        <div class="form-group">
            <label for="regno"> Quantity</label>
            <input type="text" name="q1" class="form-control" id="q1" placeholder="Quantity" value="<?=$q1?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>"
</div>
</body>
</html>