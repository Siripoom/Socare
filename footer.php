<?php
    include('server.php');
    $sql="SELECT * FROM tb_counter WHERE id_counter=1 ";
    
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($query);
    
?>


<footer>
    <section>
<div class="container-fluid" style="background-color:#f6fbf4;">
    <div class="row mt-4">
        <div class="col-3">
            <div class="text-center fs-4 mt-3"><strong>SoCare.co.ltd</strong></div>
            <div class="text-reset fs-7 mt-3 mx-5">SoCare ใครไม่แคร์แต่เราแคร์พร้อมดูแลดุจญาติมิตร</div>
            <label class="my-3 mt-3 mx-5"  >จำนวนคนดู <?php echo $row["view"]; ?> </label>    
        </div>

        <div class="col-3 text-center">
            <div class="text-reset fs-4 mt-3"><strong>สั่งซื้อสินค้า</strong></div>
            <div class="text-reset fs-7 mt-3"><a href="shop_detail_1.php" >Bio Flax Plus</a></div>
            <div class="text-reset fs-7 mt-3"><a href="shop_detail_2.php">กาเเฟยิ่งยง</a></div>
            <div class="text-reset fs-7 mt-3"><a href="shop_detail_3.php">D-Herb</a></div>
            <div class="text-reset fs-7 mt-3"><a href="shop_detail_4.php">เอนชัวร์</a></div>
            <div class="text-reset fs-7 mt-3"><a href="shop_detail_5.php">Lingzhi mushroom</a></div>
            <div class="text fs-7 mt-3"><a href="shop_detail_6.php">Senior Balance 50+</a></div>
        </div>
        <div class="col-3 text-center">
            <div class="text-reset fs-4 mt-3"><strong>ปรึกษาปัญหาสุขภาพ</strong></div>
            <div class="text-reset fs-7 mt-3" ><a href="brain.php">โรคอัลไซเมอร์</a></div>      
            <div class="text-reset fs-7 mt-3" ><a href="">โรคตา</a></div>  
            <div class="text-reset fs-7 mt-3" ><a href="">โรคหู</a></div>
            <div class="text-reset fs-7 mt-3" ><a href="">โรคเบาหวาน</a></div>
            <div class="text-reset fs-7 mt-3" ><a href="">โรคหัวใจ</a></div>
        </div>
        <div class="col-3">
        <div class="text-center fs-4 mt-3"><strong>Contact</strong></div>
            <div class="text-reset fs-7 mt-3">ที่อยู่บริษัท 73/1 ต.หนองจอก อ.หนองจอก จ.ราชบุรี</div>
            <div class="text-reset fs-7 mt-3">ชื่อบริษัท : SoCare.co.ltd</div>      
            <div class="text-reset fs-7 mt-3">Email : SoCare@gmail.com</div>  
            <div class="text-reset fs-7 mt-3">tel : 099-7536999</div> 
            <div class="text-reset fs-7 mt-3">FB : SoCare Official</div> 
            <div class="mt-4">   
        </div>
    </div>
</div><br>


    </section>
</footer>