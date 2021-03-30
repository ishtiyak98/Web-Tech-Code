<?php 
    session_start();
    require_once('../model/db_functions.php');

    if (isset($_POST['submit'])) {
        $id=$_SESSION['id'];

        $result=deleteProduct($id);

        if ($result) {
            header('location: ../view/product_list.php');
        }
        else{
            echo"error";
        }
    }

?>