<?php 
include('server.php');
include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>หน้าแรก</title>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
            <div style="border-style: solid; padding: 2rem;border-color:#004e48; ">
            <form action="form_db.php" method="post">
                <h3>แบบทดสอบคุณมีความเสี่ยงเป็นโรคอัลไซเมอร์หรือไม่</h3>
                
                <br>
                <div class="form-group"><strong>1.คุณมีอาการลืมทางที่คุ้นเคย</strong></div>
                <div>
                <input class="mt-2" type="radio" name="s01" value="0">ไม่มี
                </div>
                <div>
                <input class="mt-2" type="radio" name="s01" value="1">น้อย
                </div>
                <div>
                <input class="mt-2" type="radio" name="s01" value="2">ปานกลาง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s01" value="3">บ่อยครั้ง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s01" value="4">ทุกครั้ง
                </div>


                <br>
                <div class="form-group"><strong>2.ลืมเหตุการณ์สำคัญที่เพิ่งเกิดขึ้น</strong></div>
                <div>
                <input class="mt-2" type="radio" name="s02" value="0">ไม่มี
                </div>
                <div>
                <input class="mt-2" type="radio" name="s02" value="1">น้อย
                </div>
                <div>
                <input class="mt-2" type="radio" name="s02" value="2">ปานกลาง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s02" value="3">บ่อยครั้ง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s02" value="4">ทุกครั้ง
                </div>


                <br>
                <div class="form-group"><strong>3.มีปัญหาในการนอนหลับ</strong></div>
                <div>
                <input class="mt-2" type="radio" name="s03" value="0">ไม่มี
                </div>
                <div>
                <input class="mt-2" type="radio" name="s03" value="1">น้อย
                </div>
                <div>
                <input class="mt-2" type="radio" name="s03" value="2">ปานกลาง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s03" value="3">บ่อยครั้ง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s03" value="4">ทุกครั้ง
                </div>


                <br>
                <div class="form-group"><strong>4.คุณมีการใช้ยานอนหลับ</strong></div>
                <div>
                <input class="mt-2" type="radio" name="s04" value="0">ไม่มี
                </div>
                <div>
                <input class="mt-2" type="radio" name="s04" value="1">น้อย
                </div>
                <div>
                <input class="mt-2" type="radio" name="s04" value="2">ปานกลาง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s04" value="3">บ่อยครั้ง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s04" value="4">ทุกครั้ง
                </div>

                
                <br>
                <div class="form-group"><strong>5.คุณมีอารมณ์ที่ฉุนเฉียว</strong></div>
                <div>
                <input class="mt-2" type="radio" name="s05" value="0">ไม่มี
                </div>
                <div>
                <input class="mt-2" type="radio" name="s05" value="1">น้อย
                </div>
                <div>
                <input class="mt-2" type="radio" name="s05" value="2">ปานกลาง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s05" value="3">บ่อยครั้ง
                </div>
                <div>
                <input class="mt-2" type="radio" name="s05" value="4">ทุกครั้ง
                </div>
                <button class="btn btn-success mt-3"  name="forms">ตกลง</button>
                </div>
            </div>
            <div class="col-4">
            <div class="card">
                    <img src="img/brain.jpg" style="card-img-top width: 20rem; height: auto">
                </div>
				<h2 class="card-title mt-3">โรคอัลไซเมอร์ </h2>
			
                <a class="btn btn-primary fs-4 mt-3" href="brain.php">รายระเอียด</a>
                <div class="card mt-3">
                    <img src="img/bio flax.jpg" style="card-img-top width: 20rem; height: auto">
                </div>
				<h2 class="card-title mt-3">Bio Flax Plus </h2>
				<p class="card-text fs-4 mt-3 ">ราคา 520 บาท<p>
                <p class="card-text fs-4 mt-3 text-danger">สินค้าโปรโมชั่นซื้อ 1 แถม 1<p>
                <a class="btn btn-primary fs-4 mt-3" href="shop_detail_1.php">รายระเอียด</a>
            </div>
            </div>
            
            </div><br>
    </div></form>
</body>
<?php 
include('footer.php');
?>