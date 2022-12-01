<?php 
    include('server.php');
    include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>หน้าแรก</title>
<body>
<div class="container shadow p-3 mb-5 bg-body rounded mt-3">
    <div class="row">
        <div class="col-8">
       
            <form action="contact_db.php" method="post"></form>
            <h3>สั่งซื้อสินค้า</h3>
            <p>คุณสามารถสั่งซื้อสอนค้าได้</p>
            <div class="input-group mt-3"></div>
            <label for="username">ชื่อ</label>
            <input type="text" name="username" require class="form-control">

            <div class="input-group mt-3"></div>
            <label for="product" >สินค้า : Bio Flax Plus</label>
            <!-- <select name="product" style="">
            <option value="0">1.Bio Flax Plus</option>
            <option value="1">2.กาแฟยิ่งยง</option>
            <option value="2">3.D-HERB</option>
            <option value="3">4.เอนชัวร์</option>
            <option value="4">5.Lingzhi mushroom</option>
            <option value="5">6.Senior Balance 50+</option>
            </select> -->

<div></div>
            <label for="จำนวนสินค้า" class="my-3 " >จำนวนสินค้า</label>
            <input type="number" class="border btn from-control" style=" margin-left:13px; width:80px ">
            

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
            <button class="btn btn-success mt-3" href="index.php" name="contact">สั่งซื้อสินค้า</button>

            
           

        </div>
        <div class="col-4">
    <div class="card shadow p-3 mb-5 bg-body rounded mt-3">
                    <img src="img/bio flax.jpg" class="card-img-top" >
                </div>
				<h2 class="card-title mt-3">Bio Flax Plus </h2>
				<p class="card-text fs-4 mt-3" style="color:red; ">ราคา 520 บาท<p>
                <p class="card-text fs-4 mt-3 text-white">สินค้าโปรโมชั่นซื้อ 3 แถม 1<p>
                <a class="btn btn-primary fs-4 mt-3" href="shop_detail_3.php">รายระเอียด</a>
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