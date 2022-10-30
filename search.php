<?php include 'dbcon.php'?>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<style>
    .card {
        float: left;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 25%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }

</style>


<body>
<?php include "navbar.php"; ?>


<div>
    <h1 style="text-align: center">Shop Items</h1>
</div>

<?php
include "search.inc.php";
?>

<div>
    <?php
    $search =$_GET['search'];
    $sql=mysqli_query($con,"SELECT * FROM items where name LIKE '%$search%'");

    while($row=mysqli_fetch_array($sql))
    {
        ?>

        <div class="card">
            <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
            <div class="container">
                <h4>Name: <b><?php echo $row['name'] ?></b></h4>
                <p>Price: $<?php echo $row['price'] ?></p>
                <a href="#!">Buy</a>
                <br>
                <br>
            </div>
        </div>

        <?php
    }
    ?>
</div>






</body>




</html>

