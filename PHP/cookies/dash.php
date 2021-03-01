<?php 
    if (isset($_COOKIE['flag'])) {
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <center>
        <h3>Welcome <?php echo $_COOKIE['username'] ?></h3>
    </center>
    <a href="logout.php">logout</a>
</body>
</html>

<?php 
    }
    else{
        header('location: login.php');
    }
?>
   