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
                        <h1> เข้าสู่ระบบ</h1>
                        <h6> สำหรับผู้ที่เคยลงทะเบียนแล้ว </h6>
                        <div style="border-style: solid; border-width:thin; border-color:green; width:98%; padding: 20px;">

                            <form action="login_db.php" method="POST">

                                <?php if (isset($_SESSION['error'])) : ?>
                                    <div class="error">
                                        <h3>
                                            <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                            ?>
                                        </h3>
                                    </div>
                                <?php endif ?>

                        



                                <div class="form-group">
                                    <label for="username">ชื่อผู้ใช้</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">รหัสผ่าน:</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <a href="index.php" class="btn btn-danger mt-3">ยกเลิก</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success mt-3" name="login_user" style="margin-top:10px"> เข้าสู่ระบบ</button>
                                    </div>
                                    <p class="mt-3">ยังไม่ได้เป็นสมาชิก? <a href="register.php">ลงทะเบียน</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>


</body>
<?php 
    include("footer.php");
?>
</html>