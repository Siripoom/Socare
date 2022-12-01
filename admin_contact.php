<?php
include('sidemenu.php');
include('server.php');


$sql = "SELECT * FROM tb_contact";
$result = mysqli_query($con, $sql);
?>
<html lang="en">
<title>Document</title>

<body>
    <div class=row>

        <div class="container-fueid">
            <div class=row>
                <div class="col-2">
                </div>
                <div class="col-10">
                    <p class="h3 mt-3">ข้อมูลการติดต่อ</p>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <form action="deletedata.php" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <label for="id_contact">id contact</label>
                                        <input type="text" name="id_contact" placeholder="ป้อน idcontact " onfocus="this.value=''" class="form-control">
                                    </div>
                                    <div class="col">
                                        <div class="name">
                                            <label for="name">name</label>
                                            <input type="text" name="name" placeholder="ป้อน name " onfocus="this.value=''" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="email">
                                            <label for="email">email</label>
                                            <input type="email" name="email" placeholder="ป้อน email " onfocus="this.value=''" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="tell">
                                            <label for="tell">เบอร์โทรศัพท์</label>
                                            <input type="number" name="tell" placeholder="ป้อน tell " onfocus="this.value=''" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="title">
                                            <label for="title">หัวเรื่อง</label>
                                            <input type="title" name="title" placeholder="ป้อน title " onfocus="this.value=''" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="text">
                                            <label for="text">เนื้อหา</label>
                                            <input type="text" name="text" placeholder="ป้อน text " onfocus="this.value=''" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <input type="submit" class="btn btn-danger mt-3 mx-2" name="delete_contact" value="ลบข้อมูล">

                                    <input type="submit" class="btn btn-success mt-3 mx-2" name="add_contact" value="เพิ่มข้อมูล">

                                    <input type="submit" class="btn btn-warning mt-3 mx-2" name="edit_contact" value="แก้ไขข้อมูล">
                                
                            </form>

                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">ขื่อ</th>
                                <th scope="col">อีเมลล์</th>
                                <th scope="col">เบอร์โทรศัพท์</th>
                                <th scope="col">หัวเรื่อง</th>
                                <th scope="col">เนื้อหา</th>
                                <th scope="col">ลบข้อมูล</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $row["id_contact"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["tell"]; ?></td>
                                    <td><?php echo $row["title"]; ?></td>
                                    <td><?php echo $row["text"]; ?></td>
                                    <td>
                                        <a href="deletedata.php?idc=<?php echo $row["id_contact"]; ?>" class="btn btn-danger mt-3">ลบข้อมูล</a>
                                    </td>
                                </tr>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</tbody>
</table>
</body>
<?php
?>