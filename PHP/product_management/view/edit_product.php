<?php
    session_start();
    require_once('../model/db_functions.php');
    $id=$_GET['id'];
    $product=getProductByID($id);
    $_SESSION['id']=$id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit product</title>
</head>
<body>
    <fieldset>
    <legend><b>EDIT PRODUCT</b></legend>
    <form action="../controller/edit_product_check.php" method="post">
        <table>
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value="<?php echo $product['name'] ?>"></td>
        </tr>
        <tr>
            <td>Buying Price</td>
        </tr>
        <tr>
            <td><input type="text" name="bPrice" value="<?php echo $product['buyingPrice'] ?>"></td>
        </tr>
        <tr>
            <td>
                Selling Price
            </td>
        </tr>
        <tr>
            <td><input type="text" name="sPrice" value="<?php echo $product['sellingPrice'] ?>"></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="display" id="" <?php if($product['display']==1){echo "checked";} ?>> Display
            </td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Save"></td>
        </tr>
        </table>
    </form>
    </fieldset>
</body>
</html>