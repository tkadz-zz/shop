<?php include "dbcon.php"; ?>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>


<body>
<?php include "navbar.php"; ?>


<div>
    <h1>Login</h1>
</div>

<div style="text-align: center">
    <form method="POST" action="login.php">
        <h3>Login Form</h3>


        <label>Email</label><br>
        <input name="email" type="email" placeholder="Enter your email address..." required>

        <br>
        <br>

        <label>Password</label><br>
        <input name="password" type="password" placeholder="Enter your password..." required>

        <br>
        <br>

        <button type="reset" >Clear</button>
        <button type="submit" name="btn_login">Login</button>



    </form>
</div>

</body>




</html>


<?php

if(isset($_POST['btn_login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $stmt = $con->query($sql);

    if($stmt->num_rows > 0){
        $rows = $stmt->fetch_array(MYSQLI_ASSOC);
        if($password == $rows['password']){
            session_start();
            $_SESSION['id'] = $rows['id'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['surname'] = $rows['surname'];
            $_SESSION['email'] = $rows['email'];
            $_SESSION['role'] = $rows['role'];

            header("location:index.php");
        }
        else{
            echo 'password not correct';
        }
    }
    else{
        echo 'Email not found';
    }


}


?>