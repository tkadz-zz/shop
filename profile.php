<?php include 'dbcon.php'?>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>




<body>
<?php include "navbar.php"; ?>



<div>
    <h1>Profile</h1>
</div>

<marquee direction="right"><?php echo 'Welcome ' . $_SESSION['name'] .' '. $_SESSION['surname'] ?></marquee>

</body>




</html>