
<?php
    include('server.php');
    session_start();
    
    // $id = $_POST["1"];
    // $sqlll="SELECT * FROM tb_product WHERE name_product='$id'";
    // $result=mysqli_query($con,$sqlll);
    // $_SESSION['1'] = $id;


    if(isset($_POST["buy"])){
        $sum= array($_POST["amount"],$_POST["price"]);
        $total=$sum[0]*$sum[1];

        $sql="UPDATE tb_product set amount = amount-'$sum[0]' WHERE id_product=1";
        $query=mysqli_query($con,$sql);


        if($query){
            $_SESSION['bill']=$total;
            $_SESSION['amount']=$sum[0];
            // echo $_SESSION['bill'];
            header('location:bill.php');
        }else{
            header('location:product_1.php');
        }
    }

$_SESSION['1']="Bio Flax Plus";


?>

