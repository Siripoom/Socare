<?php
include('server.php');
?>
<?php 
    include("menu.php");
?>
<html lang="en">
<title>Document</title>
<body>
<div class="container">
        <div class="row">
            <div class="col-6">
                <div class="col-6">
                    <h1> สมัครสมาชิก</h1>
                    <h6> สำหรับผู้ที่ไม่เคยลงทะเบียน กรุณาสมัครสมาชิกก่อนเข้าสู่ระบบ</h6>
                    <div style="border-style: solid; border-width:thin; border-color:green; width:100%; padding: 20px;">

                        <form action="register_db.php" method="POST">
                            <div class="input_group">
                                <label for="username">ชื่อผู้ใช้:</label>
                                <input type="text" name="username" requird class="form-control">

                            </div>
                            <div class="input_group">
                                <label for="email">อีเมลล์:</label>
                                <input type="email" name="email" requird class="form-control">
                            </div>
                            <div class="input_group">
                                <label for="pwd">รหัสผ่าน:</label>
                                <input type="password" name="password_1" requird class="form-control">
                            </div>
                            <div class="input_group">
                                <label for="pwd">ยืนยันรหัสผ่าน:</label>
                                <input type="password" name="password_2" requird class="form-control">
                            </div>
                            <div class="input_group">
                                <label for="firstname">ชื่อ:</label>
                                <input type="text" name="name" requird class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-3">
                                <a href="index.php" class="btn btn-danger mt-3">ยกเลิก</a>

                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <button class="btn btn-success mt-3" name="reg_user" style="margin-top:10px"> ลงทะเบียน</from></button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                </div><br>
            </div>
            </div></div></div>
        
</body>
<?php 
    include("footer.php");
?>
</html>