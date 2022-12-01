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
    <div class="col">
    <img src="img/bio flax.jpg" style="width: 650px; height: 80%;">
    </div>
    <div class="col">
        <div class="row">
            <form action="product_db.php" method="post">
            <p class="h1 my-3">Bio Flax Plus บรรจุ 60 แคปซูล </p>
            <input type="number" class="text" name="price" value="520">
            <p class="h3 my-3">Bio Flax Plus </p>
            <p class="h4 my-1 "style="margin-left:40px;text-color:#7d8a96;">อาหารเสริมช่วยเสริมสร้างและปรับฮอร์โมนเพศหญิง</p> 
            <p class="h4 "style="margin-top:-7px;">ลดอาการวัยทอง ช่วยต้านอนุมูลอิสระ ชลอความแก่ บำรุงผิวพรรณให้สดใสเปล่งปลั่ง และยังช่วยในเรื่องของการไหลเวียนของเลือดที่ดีขึ้นอีกด้วย</p>
            <br><br><br><br><br><br><br>
 
            <label for="จำนวนสินค้า" class="my-3 h3">จำนวนสินค้า</label>
            <input type="number" name="amount" class="border btn from-control" style=" margin-left:13px; width:80px ">
            <div>
    
            <button class="btn btn-success fs-5 "  name="buy" style="margin-top:20px; width: 550px;">สั่งซื้อสินค้า</button>
            </div>
        </div>
        </form>
        <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                
                </div>
				<h2 class="card-title mt-3">Bio Flax Plus</h2>
				<p class="card-text fs-4 mt-3 ">Bio Flax Plus บรรจุ 60 แคปซูลราคา 520 บาท  </p>
                <div class="container fs-5">
                    <div>
                        <p>คุณประโยชน์</p>
                    </div>
                    <div>
                        <p>1. ช่วยบรรเทาอาการวัยทอง ลดการเกิดสิว ปรับสมดุลฮอร์โมนในร่างกาย</p>
                    </div>
                    <div>
                        <p>2. ช่วยลดอาการก่อนมีประจำเดือน (Premenstrual Syndromes)</p>
                    </div>
                    <div>
                        <p>3. ช่วยลดระดับโคเลสเตอรอล ไขมันชนิดไม่ดีในเลือด ( LDL )</p>
                    </div>
                    <div>
                        <p>4. ช่วยเสริมมรรถภาพทางเพศ สมรรถภาพทางร่างกาย ช่วยให้ร่างกายกระปรี้กระเปร่า</p>
                    </div>
                    <div>
                        <p>5. เพิ่มประสิทธิภาพของสมอง</p>
                    </div>
                    <div>
                        <p>6. ช่วยในการไหลเวียนของเลือดดีขึ้น เลือดไม่หนืดข้น ป้องกันโรคอัมพฤกษ์ อัมพาต หัวใจ</p>
                    </div>
                    <div>
                        <p>7. ป้องกันมะเร็งของสตรี ป้องกันต่อมลูกหมากโต</p>
                    </div>
                    <div>
                        <p>8. เพิ่มประสิทธิภาพการทำงานของปอด และกล้ามเนื้อของหัวใจ</p>
                    </div>
                    <div>
                        <p>9. ช่วยต้านอนุมูลอิสระ ชลอความแก่ บำรุงผิวพรรณให้สดใส เปล่งปลั่ง</p>
                    </div>
                    </div>
	        </div><br>
    </div>

    </div>
    </div></div>

</body>
<?php 
include('footer.php');
?>
</html>