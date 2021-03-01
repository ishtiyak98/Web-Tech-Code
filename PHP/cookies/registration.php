<?php 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) || !empty($_POST['email'] || !empty($_POST['pass']))) {
            
            setcookie('username', $_POST['name'], time()+3600, '/');
            setcookie('email', $_POST['email'], time()+3600, '/');
            setcookie('pass', $_POST['pass'], time()+3600, '/');

            header('location: login.php');
        }
        else{
            echo "Plz fillout all the empty section";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <fieldset>
        <legend><h1>REGISTRATION</h1></legend>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>User Name</td>
                    <td>:
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>:
                        <input type="email" name="email" id="">
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
                        <input type="submit" name="submit" value="Signup">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="login.php ">login</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>