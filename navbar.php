<?php
session_start();
?>
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

            <li><a href="?logout">Logout</a></li>
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