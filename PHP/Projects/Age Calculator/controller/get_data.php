<?php 
    if(isset($_POST['submit'])){
        if (empty($_POST['day']) || empty($_POST['month'] || empty($_POST['yeer']))) {
            echo"please fill out all the fields";
        }
        else{
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];

    
        }
    }

?>