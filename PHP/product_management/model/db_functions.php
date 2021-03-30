<?php 
    require_once("../model/db_connection.php");

    function add_product($products){
        $conn_status=db_connect();
        $sql = "insert into products values('', '{$products['name']}', '{$products['bPrice']}', '{$products['sPrice']}', '{$products['profit']}', '{$products['display']}' )";
        $result=mysqli_query($conn_status, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function showAllProduct(){
        $conn=db_connect();
        $sql="select ID, name, profit, display from products";
        $result=mysqli_query($conn, $sql);
        $products=[];
        
        while($row=mysqli_fetch_assoc($result)){
            array_push($products, $row);
        }
        return $products;
    }

    function getProductByID($id){
        $conn=db_connect();
        $sql="Select name, buyingPrice, sellingPrice, profit, display from products where ID=$id";
        $result=mysqli_query($conn, $sql);
        $product=mysqli_fetch_assoc($result);

        return $product;
    }

    function editProdutByID($product){
        $conn=db_connect();
        $sql = "update products set name='{$product['name']}', 
                                buyingPrice='{$product['bPrice']}', 
                                sellingPrice='{$product['sPrice']}', 
                                profit='{$product['profit']}' 
                                where ID='{$product['id']}'";

        $result=mysqli_query($conn, $sql);

        if($result){
            return true;
        }
        else{
            false;
        }
    }

    function deleteProduct($id){
        $conn=db_connect();
        $sql="delete from products where ID='$id'";
        $result=mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            false;
        }
    }

?>