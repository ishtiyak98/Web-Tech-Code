<?php 
    require_once('../model/db_functions.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['bPrice']) || empty($_POST['sPrice'])){
            echo "Please fill out all the field";
        }
        else {
            $name=$_POST['name'];
            $bPrice=$_POST['bPrice'];
            $sPrice=$_POST['sPrice'];
            $profit=$sPrice-$bPrice;

            if (isset($_POST['display'])) {
                $display=1;
            }
            else {
                $display=0;
            }

            $products=[
                'name'=>$name,
                'bPrice'=>$bPrice,
                'sPrice'=>$sPrice,
                'profit'=>$profit,
                'display'=>$display
            ];

            $result=add_product($products);
            if($result==true){
                header('location: ../view/product_list.php');
            }
            else{
                error;
            }
            
        }

    }

?>