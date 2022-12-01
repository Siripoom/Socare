<?php
include('menu.php');
include('server.php');
// $id=$_GET["p_id"];
// $sql="SELECT * FROM tb_product WHERE id_product='$id'";
// $query=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded mt-3">
        <h2 class="text-center">สั้งซื้อสำเร็จ</h2>
        <div class="row" >
           
            <div class="col">


            <label for="username" class="text fs-4 mt-2" >ชื่อ : </label><br>


            <label for="username"class="text fs-4 mt-2" > สินค้า : </label><br>

            

            <label for="username"class="text fs-4 mt-2" >จำนวนสินค้า : </label><br>

            <label for="username"class="text fs-4 mt-2" >ช่องทางการชำระเงิน : </label><br>

            

            <label for="username"class="text fs-4 mt-2" >ราคา : </label><br>


            <label for="username"class="text fs-4 mt-2" >ที่อยู่ : </label><br>

            </div>
            
        <div class="col">
            <center>
            <div class="text fs-4 mt-2">
         <?php echo $_SESSION['username'];?>
         </div>

         <div class="text fs-4 mt-2">
         <?php echo $row["name_product"];?>
         </div>
         <div class="text fs-4 mt-2">
         <?php echo $_SESSION['username'];?>
         </div>
         <div class="text fs-4 mt-2">
         <?php echo $_SESSION['username'];?>
         </div>
         <div class="text fs-4 mt-2">
         <?php echo $_SESSION['username'];?>
         </div>
         <div class="text fs-4 mt-2">
         <?php echo $_SESSION['username'];?>
         </div>
        
         </center>
        
         </div>

        </div>
        
    </div>





</body>

</html>