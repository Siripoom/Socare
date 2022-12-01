<?php 
    include('server.php');
    include('menu.php');

    $sql = "SELECT * FROM tb_member WHERE username='$_SESSION[username]'";
    $query=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($query);


    $sqll = "SELECT * FROM tb_product WHERE name_product='$_SESSION[1]'";
    $queryy=mysqli_query($con,$sqll);
    $resultt=mysqli_fetch_assoc($queryy);

?>
<!DOCTYPE html>
<html lang="en">
<title>หน้าแรก</title>
<body>
<div class="container shadow p-3 mb-5 bg-body rounded mt-3">
    <div class="row">
        <div class="col-8">
       
            <form action="product_db.php" method="post">
            <h3>สั่งซื้อสินค้า</h3>
            <p>คุณสามารถสั่งซื้อสอนค้าได้</p>
            <div class="input-group mt-3"></div>
            <label for="username">ชื่อ :<?php echo $_SESSION['username']; ?></label>
            <div class="input-group mt-3"></div>
            <label for="product" value="Bio Flax Plus" name="1">สินค้า : Bio Flax Plus</label>

            
<div></div>
            <label for="จำนวนสินค้า" class="my-3 " >จำนวนสินค้า</label>
            <?php echo $_SESSION['amount']; ?> 
            
            
            <div class="input-group mt-3"></div>
            <label for="product" >ช่องทางการชำระเงิน</label>
            <select name="product" >
            <option value="0">ปลายทาง</option>
            <option value="1">mobile banking</option>
            <option value="2">debit/credit</option>
            <option value="3">promtpay</option>
            </select>

            
            <div class="input-group mt-3"></div>
            <label for="tel" class=" fs-5" style="color:red ">ราคา <?php echo $_SESSION['bill']; ?>
            </label>
            

            <div class="input-group mt-3"></div>
            <label for="email">อีเมลล์</label>
            <input type="email" name="email" placeholder="name@gmail.com" require class="form-control">


            <div class="input-group mt-3"></div>
            <label for="tel">เบอร์โทรศัพท์</label>
            <input type="text" name="tel" require class="form-control">
            

            <div class="input-group mt-3"></div>
            <label for="text">ที่อยู่</label>
            <textarea class="form-control margin: 100;" type="text" name="text"></textarea>


            <button class="btn btn-secondary mt-3" href="index.php" >ยกเลิก</button>
            <button class="btn btn-success mt-3" href="receipt.php?p_id=<?php echo $resultt["id_product"];?>">ยืนยันการสั่งซื้อสินค้า</button>
            </form>





        </div>
        <div class="col-4">
    <div class="card shadow p-3 mb-5 bg-body rounded mt-3">
                    <img src="img/bio flax.jpg" class="card-img-top" >
                </div>
				<h2 class="card-title mt-3">Bio Flax Plus </h2>
				<p class="card-text fs-4 mt-3" style="color:red; ">ราคา 520 บาท<p>
                <p class="card-text fs-5 mt-3 text-danger">สินค้าโปรโมชั่นซื้อ 3 แถม 1<p>
                <a class="btn btn-primary fs-4 mt-3" href="shop_detail_1.php">รายระเอียด</a>
    </div>
        
    </div>
</div>
<br>
</div>



</body>
<?php 
include('footer.php');
?>
</html>