<?php include 'dbcon.php'?>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<style>
    table, th, td{
        border: 1px solid #333333;;
    }
    table{
        width: 100%;
    }
</style>


<body>
<?php include "navbar.php"; ?>



<div>
    <h1>Admin Dashboard</h1>
</div>

<div>
    <form method="POST" action="admin.php">
        <label>Item Name</label><br>
        <input type="text" name="itemName" placeholder="Enter item name" required>
        <br>
        <br>
        <label>Item Price</label><br>
        <input type="number" name="itemPrice" placeholder="Enter item price" required>
        <br>
        <br>
        <button type="submit" name="btn_add">Add Item</button>
    </form>
</div>

<br>
<br>
<br>


<div>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>More</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM items ORDER BY id DESC");
        $s = 0;
        while($row=mysqli_fetch_array($sql)) {
            $s++;
            ?>
            <tr>
                <td><?php echo $s ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><a href="delete.php?itemID=<?php echo $row['id'] ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>


        </tbody>
    </table>
</div>



</body>




</html>


<?php

if(isset($_POST['btn_add'])) {
    $name = mysqli_real_escape_string($con, $_POST['itemName']);
    $price = mysqli_real_escape_string($con, $_POST['itemPrice']);
    $dateAdded = date('Y-m-d H:m:s');

    $sql = "INSERT INTO items(name, price, dateAdded) VALUES('$name', '$price', '$dateAdded')";
    if (mysqli_query($con, $sql)) {
        header('location: admin.php');
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
}