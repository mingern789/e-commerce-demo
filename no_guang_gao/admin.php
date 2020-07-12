<!DOCTYPE html>
<html>
<head>
    <title>admin page</title>
</head>
<body>
<h1>Demo e-commerce site</h1>
    <br>
    <a href="mainmenu.php">Home</a>
    <br>
    <a href="admin.php">Admin Page</a>
    <form action="insert.php" method="POST">
        <br>
        <div class="form-group">
        <label for ="name">Product Name: </label>
        <input type="text" id="name" name="pname">
        </div>
        <br>
        <div class="form-group">
        <label for ="price">Price: </label>
        <input type="text" id="price" name="price">
        </div>
        <br>
        <div class="form-group">
        <label for ="desc">Description: </label>
        <input type="text" id="desc" name ="desc">
        </div>
        <br>
        <button type="submit">Add Product to Catalogue</button>
    </form>
</body>
</html>