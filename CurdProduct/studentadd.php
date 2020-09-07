<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <form action="studentaddaction.php" method="post">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="regno"> Product Brand</label>
            <input type="text" name="regno" class="form-control" id="regno" placeholder="Product Brand">
        </div>
        <div class="form-group">
            <label for="regno"> Manufacturing date</label>
            <input type="text" name="date1" class="form-control" id="date1" placeholder="Manufacturing Date">
        </div>
        <div class="form-group">
            <label for="regno">Expiry Date</label>
            <input type="text" name="date2" class="form-control" id="date2" placeholder="Expiry Date">
        </div>
        <div class="form-group">
            <label for="regno"> Quantity</label>
            <input type="text" name="q1" class="form-control" id="q1" placeholder="Quantity">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
</body>
</html>