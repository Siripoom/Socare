<?php 
include('server.php');
include('menu.php');

$_SESSION['papa']="Our website www.maekongplaza.org uses cookie technology or other similar technologies. On our website, please consult our Cookie Policy and Data Privacy Policy.";

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}

$update="UPDATE tb_counter SET view = view+1 WHERE id_counter=1";
mysqli_query($con,$update);


?>
<!DOCTYPE html>
<html lang="en">
<title>หน้าแรก</title>
<body>
<div class="container-fluid" style="background-color: #F6FBF4;">
        <div class="container text-center">
            <div class="row">
                <p class="h2 text-center mt-3">Learning</p>
                <div class="col mt-3" style="background-color: #F6FCF3;">
                    <center>
                        
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-title ">title name</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                        
                    </center>
                </div>
                <div class="col mt-3 " style="background-color: #EDF9E5;">
                    <center>
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="title">title name</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col mt-3 " style="background-color: #DCF4CE;">
                    <center>
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="title">title name</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row">
                <p class="h2 text-center mt-3">Product</p>
                <div class="col mt-3" style="background-color: #DCF4CE;">
                    <center>
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="title">D-Herb</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col mt-3 " style="background-color: #DCF4CE;">
                    <center>
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="title">title product</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col mt-3 " style="background-color: #DCF4CE;">
                    <center>
                        <div class="card shadow p-3 mb-5 bg-body rounded mt-5" style="width: 25rem;">
                            <img src="img/pro1.png" class="card-img-top">
                            <div class="card-body">
                                <p class="title">title product</p>
                                <p class="card-text">description</p>
                                <a href="learning.php" class="btn btn-primary">เพิ่มเติม</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <br>




<?php include('community.php');?>
        <div class="container">
            <div class="row">
                <div class="col-6 ">
                    <img src="img/pic4.png" width="98%" class="MR-5">
                </div>
                <div class="col-6  text-center">
                    <strong><p class="h3 " style="color: #5FD068; margin-top: 13rem;;">Socare</p></strong>
                    <p class="text">SoCare เป็นบริษัทสำหรับผู้สูงอายุที่ต้องการเข้าถึงบริการ
                        การสอบถามสุขภาพ สินค้าสุขภาพ บ้านพักคนชรา เพราะเราห่วงใยคุณ</p>
                </div>
            </div>
        </div>
    </div>
<!--  notification message -->
    
        <center><div class="alert alert-info" role="alert">
           <?php
            echo $_SESSION['papa'];
            unset($_SESSION['papa']);
            ?>
        </div></center>
        
            
            
    
</body>

<?php 
include('footer.php');
?>




</html>