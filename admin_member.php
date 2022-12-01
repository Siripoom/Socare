<?php
include('server.php');
include('sidemenu.php');

$sql="SELECT * FROM tb_wb GROUP BY  id_wb DESC";
$query = mysqli_query($con,$sql);

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

// if(isset($_SESSION['username'])){
//     $sql="SELECT * FROM tb_member WHERE username = '$_SESSION[username]' AND urole = 'admin'";
//     $query = mysqli_query($con,$sql);
//     $row = mysqli_fetch_assoc($query);
//     header('location:admin_member.php');
// } else {
//     header('location:index.php');
// }

$view="SELECT * FROM tb_counter WHERE id_counter=1 ";
$query=mysqli_query($con,$view);
$row=mysqli_fetch_assoc($query);

$sql = "SELECT * FROM tb_member";
$result = mysqli_query($con, $sql);
?>
<html lang="en">
<title>Document</title>

<body>
    
    <div class="container-fueid">
        <div class=row>
            <div class="col-2">
            </div>
            <div class="col-10">
                <p class="h3 mt-3 text-center">ข้อมูลการสมาชิก</p>
                <label class="my-3">จำนวนผู้เข้าชม <?php echo $row["view"]; ?> คน</label>
                <table class="table table-bordered mt-3">
                    <thead>
                        <form action="deletedatamember.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <label for="id_member">id สมาชิก</label>
                                    <input type="text" name="id_member" placeholder="ป้อน id_member" onfocus="this.value=''" class="form-control">
                                </div>
                                <div class="col">
                                <div class="usernmae">
                                    <label for="id">username</label>
                                    <input type="text" name="username" placeholder="ป้อน username" onfocus="this.value=''" class="form-control">
                                </div>
                                </div>
                                <div class="col">
                                <div class="password">
                                    <label for="id">password</label>
                                    <input type="text" name="password" placeholder="ป้อน password" onfocus="this.value=''" class="form-control">
                                </div>
                                </div>
                                <div class="col">
                                <div class="email">
                                    <label for="id">email</label>
                                    <input type="email" name="email" placeholder="ป้อน email" onfocus="this.value=''" class="form-control">
                                </div>
                                </div>
                                <div class="col">
                                <div class="urole">
                                    <label for="id">สิทธ์ผู้ใช้งาน</label>
                                    <input type="text" name="urole" placeholder="ป้อน user/admin" onfocus="this.value=''" class="form-control">
                                </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-danger mt-3 mx-2" name="delete_member" value="ลบข้อมูล">

                            <input type="submit" class="btn btn-success mt-3 mx-2" name="add_member" value="เพิ่มช้อมูล">

                            <input type="submit" class="btn btn-warning mt-3 mx-2" name="edit_member" value="แก้ไขช้อมูล">

                            <input type="submit" class="btn btn-warning mt-3 mx-2" name="sort" value="เรียงข้อมูล">

                        </form>
            </div>

            <tr>
                <th scope="col">id_member</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">ลบข้อมูล</th>

            </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["id_member"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["urole"]; ?></td>

                        <td>
                            <a href="deletedatamember.php?idm=<?php echo $row["id_member"]; ?>" class="btn btn-danger mt-3">ลบข้อมูล</a>
                        </td>
                    </tr>
        </div>
    </div>
    </div>
<?php } ?>
</tbody>
</table>
</body>





<?php

?>