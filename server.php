<?php  
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $dbname = "db_socare";
    $con = mysqli_connect($servername,$username,$password,$dbname);
        if(!$con){
            die("connected failed". mysqli_connect_error());
        
        }else{
            //echo "connected";
        }

?>