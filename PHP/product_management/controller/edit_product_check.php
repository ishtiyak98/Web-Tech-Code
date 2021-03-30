<?php 
    session_start();
    require_once('../model/db_functions.php');

    if(isset($_POST['submit'])){
        $id=$_SESSION['id'];
        $name=$_POST['name'];
        $bPrice=$_POST['bPrice'];
        $sPrice=$_POST['sPrice'];
        $profit=$sPrice-$bPrice;

        if (isset($_POST['display'])) {
            $display=1;
        }
        else{
            $display=0;
        }

        $product=[
                    'id'=>$id,
                    'name'=>$name,
                    'bPrice'=>$bPrice,
                    'sPrice'=>$sPrice,
                    'profit'=>$profit,
                    'display'=>$display
                    ];

        $result=editProdutByID($product);

        if ($result) {
            header('location: ../view/product_list.php');
        }
        else{
            echo"error";
        }
    }

?>