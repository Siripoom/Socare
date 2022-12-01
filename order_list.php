<?php include('server.php');
// $id = $_GET["pf"];
// $sql = "SELECT * FROM tb_member WHERE id_member='$id'";
// $result = mysqli_query($con, $sql);
include('p_sidemenu.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>กระทู้</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="content container">
            <p class="h3 text-center">รายการสั่งซื้อสินค้า</p>
            <div class="row">
            <div class="col">
                <label for="id_bill">id สมาชิก</label>
                <input type="text" name="id_bill" placeholder="ป้อน id รายการสั่งซื้อ" onfocus="this.value=''" class="form-control">
            </div>
            </div>
            <input type="submit" name="delete" value="ลบข้อมูล" class="btn btn-danger my-2">
            <input type="submit" name="create" value="สร้าง" class="btn btn-success my-2">
            <input type="submit" name="update" value="แก้ไข" class="btn btn-warning my-2">
            <table class="table table-bordered mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">หัวข้อ</th>
                        <th scope="col">รายละเอียด</th>
                        <th scope="col">วันสร้าง</th>
                        <th scope="col">ลบข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    </div>
    </div>

</body>

</html>