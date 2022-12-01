<?php include('server.php');
session_start();
if(isset($_SESSION['username'])){
$sql = "SELECT * FROM tb_member WHERE username = '$_SESSION[username]'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.6.1.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        

        <div class="nav nav-tab " style="background-color: #3CCF4E;">
            <div class="navbar navbar-expand-lg">
                <a class="navbar-band btn text-primary fs-2" href="index.php"><strong>SoCare</strong></a>
            </div>
            <div class="navbar navbar-expand-lg">
                <a class="navbar-link btn fs-4" href="index.php" aria-current="page">หน้าแรก</a>
                <a class="navbar-link btn fs-4" href="learning.php" aria-current="page">สาระน่ารู้</a>
                <a class="navbar-link btn fs-4" href="contact.php" aria-current="page">ปรึกษาปัญหาสุขภาพ</a>
                <a class="navbar-link btn fs-4" href="about.php" aria-current="page">เกี่ยวกับเรา</a>
                <a class="navbar-link btn fs-4" href="login.php" aria-current="page">เข้าสู่ระบบ</a>
                <a class="navbar-link btn fs-4" href="register.php" aria-current="page">สมัครสมาชิก</a>
                <a class="navbar-link btn fs-4" href="community_page.php" aria-current="page">ชุมชน</a>
            </div>
            <span class="navbar-text mt-2" style="margin-left:350px;">
                <?php if (isset($_SESSION['username'])) : ?>
                    <a href="profile.php?pf=<?php echo $row["id_member"]; ?>" class="fs-3 fw-bold text-dark">
                        <?php echo $_SESSION['username']; ?></a>

                <?php endif ?>
            </span>
            <span class="navbar-text mt-3">
                <?php if (isset($_SESSION['username'])) { ?>
                    <a href="index.php?logout='1'" style="color: white;" class="btn btn-danger btn-sm mx-2 mb-3">logout</a>
                <?php } ?>
            </span>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/banner.jpg" style="width: 100%; height: 500px;">
            </div>
        </div>
</body>
</html>