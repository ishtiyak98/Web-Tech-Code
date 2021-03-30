
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form method="POST" action="../controller/add_product_check.php">
    <fieldset>
        <legend><b>ADD PRODUCT</b></legend>
        <table>
            <tr>
                <td>Name</td>
            </tr>
            <tr>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Buying Price</td>
            </tr>
            <tr>
                <td><input type="text" name="bPrice" id=""></td>
            </tr>
            <tr>
                <td>Selling Price</td>
            </tr>
            <tr>
                <td><input type="text" name="sPrice" id=""></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="display" id=""> Display
                </td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Save">
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>