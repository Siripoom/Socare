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
            <form action="contact_db.php" method="post">
            <h3>ติดต่อสอบถาม</h3>
            <p>คุณสามารถพิมพ์ข้อความเพื่อติดต่อกับผู้ดูแลได้</p>
            <div class="input-group mt-3"></div>
            <label for="name">ชื่อ</label>
            <input type="name" name="name" class="form-control">

            <div class="input-group mt-3"></div>
            <label for="email">อีเมลล์</label>
            <input type="email" name="email" placeholder="name@gmail.com" class="form-control">

            <div class="input-group mt-3"></div>
            <label for="tell">เบอร์โทรศัพท์</label>
            <input type="text" name="tell"  class="form-control">

            <div class="input-group mt-3"></div>
            <label for="title">หัวเรื่อง</label>
            <input type="text" name="title"  class="form-control">
            
            <div class="input-group mt-3"></div>
            <label for="text">ข้อความ</label>
            <textarea class="form-control margin: 100;" type="text" name="text"></textarea>

            <a class="btn btn-secondary mt-3" href="" >ยกเลิก</a>
            <button class="btn btn-success mt-3" href="index.php" name="contact">ตกลง</button>
            </form>
        </div>
        </div>
        <div class="col-4">
        <div class="container">
                <div class="card">
                    <img src="img/brain.jpg" style="card-img-top width: 20rem; height: auto">
                </div>
				<h2 class="card-title mt-3">คุณเป็นโรคอัลไซเมอร์หรือไม่ ?</h2>
				<p class="card-text fs-4 mt-3">คุณสามารถทำแบบทดสอบเพื่อดูว่าคุณเป็นโรคอัลไซเมอร์หรือไม่ได้ที่ปุ่มด้านล่าง<p>
                <a class="btn btn-primary fs-4 mt-3" href="form.php">ทำแบบทดสอบ</a>
	        </div>
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