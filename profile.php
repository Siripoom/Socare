<?php include('server.php');
include('p_sidemenu.php');
if (!isset($_SESSION['username'])){
    header('location: login.php');
}
$sql = "SELECT * FROM tb_member WHERE username='$_SESSION[username]'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profile</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="content container">

        <h2 class="text-center mt-2">ข้อมูลทั่วไป</h2>
        <div class="fs-3 fw-semibold">
            <div class="row mt-3">

                <div class="col">
                    <label>Name : <?php echo $row["name"] ?></label>

                </div>
                <div class="col">
                    <label>Username : <?php echo $row["username"] ?></label>

                </div>
                <div class="col">
                    <label>Password : <?php echo $row["password"] ?></label>

                </div>
            </div>
        </div>
        <div class="fs-3 fw-semibold" style="margin-top:50px;">
            <div class="row">
                <div class="col">
                    <label>Email : <?php echo $row["email"] ?></label>
                </div>
                <div class="col">


                </div>
                <div class="col">


                </div>
            </div>
        </div>
    </div>

</body>

</html>