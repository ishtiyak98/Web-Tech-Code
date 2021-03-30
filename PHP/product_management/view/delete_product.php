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
    <title>delete product</title>
</head>
<body>
    <fieldset>
    <legend><b>DELETE PRODUCT</b></legend>
    <form action="../controller/delete_product_check.php" method="post">
        <table>
        <tr>
            <td>Name</td>
            <td>:
                <?php echo $product['name'] ?>
            </td>
        </tr>
        <tr>
            <td>Buying Price</td>
            <td>:
                <?php 
                    echo $product['buyingPrice'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Selling Price</td>
            <td>:
                <?php 
                    echo $product['sellingPrice'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Displayable</td>
            <td>:
                <?php 
                    if ($product['display']==1) {
                        echo "Yes";
                    }
                    else{
                        echo "No";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Delete"></td>
        </tr>
        </table>
    </form> 
    </fieldset>
</body>
</html>

