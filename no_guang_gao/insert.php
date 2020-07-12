<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "commerce";
$conn = new mysqli($servername,$username,$password,$dbname);
$product = $_POST["pname"];
$price = $_POST["price"];
$desc = $_POST["desc"];
$sql = "INSERT INTO  products (Product_Name,Price,Description) VALUES ('$product','$price','$desc')";

if ($conn->query($sql) === TRUE) {
    echo "New record submitted!";
}
else {
    echo "error : " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>