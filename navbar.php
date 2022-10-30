<?php
session_start();
?>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="items.php">Shop Items</a></li>


        <?php
        if(isset($_SESSION['id'])){
            ?>
            <li><a href="profile.php"><?php echo $_SESSION['name'] ?></a></li>

            <?php
            if(isset($_SESSION['role']) AND $_SESSION['role'] == 'admin'){
                ?>
                <li><a href="admin.php">Admin</a></li>
                <?php
            }
            ?>

            <li><a href="login.php?logout">Logout</a></li>
        <?php
        }
        else{
        ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <?php
        }
        ?>


    </ul>
</nav>

<?php
if(isset($_GET['logout'])){
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['surname']);
    unset($_SESSION['email']);
}
?>

<div class="container">

<?php
include 'error_report.inc.php';
?>
