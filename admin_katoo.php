<?php
include('sidemenu.php');
include('server.php');


if(!isset($_SESSION['username'])){
    header('location:login.php');
}
// if(isset($_SESSION['username'])){
//     $sql="SELECT * FROM tb_member WHERE username='$_SESSION[username]' AND urole='admin'";
//     $query=mysqli_query($con,$sql);
//     $row=mysqli_fetch_assoc($query);
//     header('location:index.php');

// }



$sql = "SELECT * FROM tb_wb";
$result = mysqli_query($con, $sql);
?>
<html lang="en">
<title>Document</title>

<body>

        <div class="content container">
            <p class="h3 text-center mt-3">กระทู้</p>
            <form action="p_katoo_db.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="id">ID</label>
                    <input type="number" name="id_katoo" placeholder="ป้อน ID กระทู้" onfocus="this.value=''" class="form-control">
                </div>
                <div class="col ">
                    <label for="category">หมวดหมู่</label>
                    <input type="text" name="category" placeholder="ป้อน หมวดหมู่" onfocus="this.value=''" class="form-control">
                </div>
                <div class="col ">
                    <label for="title">หัวข้อ</label>
                    <input type="text" name="title" placeholder="ป้อน หัวข้อกระทู้" onfocus="this.value=''" class="form-control">
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col mt-2 ">
                    <label for="text">รายละเอียด</label>
                    <input type="text" name="text" placeholder="ป้อน รายละเอียด" onfocus="this.value=''" class="form-control">
                </div>
                <div class="col mt-2 ">
                    <label for="comment">comment</label>
                    <input type="text" name="comment" placeholder="ป้อน comment" onfocus="this.value=''" class="form-control">
                </div>
            </div>
            <input type="submit" name="delete" value="ลบข้อมูล" class="btn btn-danger my-2">
            <input type="submit" name="create" value="สร้าง" class="btn btn-success my-2">
            <input type="submit" name="update" value="แก้ไข" class="btn btn-warning my-2">
            </form>
            <table class="table table-bordered mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">หมวดหมู่</th>
                        <th scope="col">หัวข้อ</th>
                        <th scope="col">รายละเอียด</th>
                        <th scope="col">comment</th>
                        <th scope="col">หัวข้อโดย</th>
                        <th scope="col">วันสร้าง</th>
                        <th scope="col">ลบข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["id_wb"]; ?></td>
                        <td><?php echo $row["categories"]; ?></td>
                        <td><?php echo $row["title_wb"]; ?></td>
                        <td><?php echo $row["text_wb"]; ?></td>
                        <td><?php echo $row["comment"]; ?></td>
                        <td><?php echo $row["name_wb"]; ?></td>
                        <td><?php echo $row["wb_date"]; ?></td>
                        <td>
                            <a href="p_katoo_db.php?idm=<?php echo $row["id_wb"]; ?>" class="btn btn-danger mt-3">ลบข้อมูล</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
</tbody>
</table>
</body>
<?php
?>