
<?php
/**
 * Created by PhpStorm.
 * User: Zaheer Sani
 * Date: 16/04/2019
 * Time: 2:10 PM
 */

include_once ("navigation.html");
require_once("config.php");

echo "Product Details";
echo "<br>";
$sid = $_GET['id'];

$connection =  mysqli_connect(DBHOST, DBUSER, DBPASSWORD , DBNAME);

if(mysqli_connect_error()) {
    die(mysqli_connect_error());
} else {
    
}

$sql = "SELECT * FROM student WHERE id = $sid";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['Name'];
    echo "<br></a>";
    echo "Brand " . $row['Brand'];
    echo "<br></a>"; 
    echo "MFG date " . $row['Manufacturing'];
    echo "<br></a>";
    echo "Expiry " . $row['Expiry']; 
    echo "<br></a>";
    echo "Quantity " . $row['Quantity'];
    echo "<br></a>";
    echo "<br></a>";
}

?>