<?php include "dbcon.php"; ?>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<body>
<?php include "navbar.php"; ?>


<div>
    <h1>Register</h1>
</div>

<div style="text-align: center">
    <form method="POST" action="register.php">
        <h3>Registration Form</h3>
        <label>Name</label><br>
        <input name="name" type="text" placeholder="Enter your name..." required>

        <br>
        <br>

        <label>Surname</label><br>
        <input name="surname" type="text" placeholder="Enter your surname..." required>

        <br>
        <br>

        <label>Email</label><br>
        <input name="email" type="email" placeholder="Enter your email address..." required>

        <br>
        <br>

        <label>Password</label><br>
        <input name="password" type="password" placeholder="Enter your password..." required>

        <br>
        <br>

        <button type="reset" >Clear</button>
        <button type="submit" name="btn_register">Register</button>



    </form>
</div>


</body>


</html>

<?php

if(isset($_POST['btn_register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $status = 1;
    $dateAdded = date('Y-m-d H:m:s');
    $role = 'user';

    $sql = "INSERT INTO users(name, surname, email, password, status, role, dateAdded) VALUES('$name', '$surname', '$email', '$password', '$status', '$role', '$dateAdded')";
    if(mysqli_query($con, $sql)){
        echo 'Registration Successfully you can now login';
    }
    else{
        echo 'Error: ' . mysqli_error($con);
    }

}


?>
