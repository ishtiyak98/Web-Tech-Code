<?php 
    require_once('../model/db_functions.php');
    $product=showAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <fieldset>
    <legend><b>DISPLAY</b></legend>
    <table border="1">
        <tr>
            <td>NAME</td>
            <td>Profit</td>
            
            
        </tr>
        <?php 
            foreach($product as $p){
                if($p['display']=='1'){
                    echo"
                        <tr>   
                            <td>{$p['name']}</td>
                            <td>{$p['profit']}</td>
                            <td><a href='../view/edit_product.php?id=$p[ID]'>edit</a></td>
                            <td><a href='../view/delete_product.php?id=$p[ID]'>delete</a></td>
                        </tr>";
                }
            }
        ?>
    </table>
    </fieldset>
</body>
</html>