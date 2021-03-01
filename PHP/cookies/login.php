<?php 
    if(isset($_POST['submit'])){
        if(!empty($_POST['name'] || !empty($_POST['pass']))){
            if (trim($_POST['name'])==trim($_COOKIE['username']) && trim($_POST['pass'])==trim($_COOKIE['pass'])) {
                setcookie('flag', true, time()+3600, '/');
                header('location: dash.php');
            }
            else{
                echo "error";
            }
        }
        else{
            echo "plz fill out all the area";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <fieldset>
        <legend><h1>LOGIN</h1></legend>
        <form method="post" action="">
            <table>
                <tr>
                    <td>User Name</td>
                    <td>:
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:
                        <input type="password" name="pass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="login">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="registration.php">signup</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>