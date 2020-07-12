<!DOCTYPE html>
<html>
<head>
    <title>e-commerce demo</title>
</head>
<body>
    <h1>Demo e-commerce site</h1>
    <br>
    <a href="mainmenu.php">Home</a>
    <br>
    <a href="admin.php">Admin Page</a>
    <div class="container">
        <h1>Products</h1>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "commerce";
    $conn = new mysqli($servername,$username,$password,$dbname);

    $sql = "SELECT Product_Name,Price,Description FROM products";
    $result = $conn->query($sql);
    if($result->num_rows>0) {
        while($row = $result->fetch_assoc()){
            echo 
            "<h2>" . $row['Product_Name'] . "</h2>
            <p>" . "Price: " . $row['Price'] ."</p>" . "Description: "  . $row['Description'] . "</p>";
        }
    }
    else{
        echo "<p>No products found.</p>";
    }
    $conn->close();

    ?>
</body>
</html>