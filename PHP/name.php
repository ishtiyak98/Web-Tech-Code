
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>
    <form method="post" action="">
        Name : <input type="text" name="name" id="">
        <input type="submit" name='submit' value="Submit">
    </form>
</body>
</html>

<?php 
    if (isset($_POST['submit'])) {
        if(empty($_POST['name'])){
            echo"plz enter a name";
        }
        else{
            echo"Welcome ".$_POST['name'];
        }
    }
?>
