<?php
include('sidemenu.php');
include('server.php');



$sql = "SELECT * FROM tb_forms";
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
      
        <p class="h3 mt-3">ข้อมูลการส่งแบบฟอร์ม</p>
        <table class="table table-bordered mt-3">
            <thead>


                <form action ="deletedataform.php" method="POST">
                    <label for="id">id form</label>
                    <input type="text" name="id_contact" placeholder="ป้อน form เพื่อลบ" onfocus="this.value=''" class="form-control">
                    <input type="submit" class="btn btn-danger mt-3" value="ลบข้อมูล">
                </form>

                <tr>
                    <th scope="col">id</th>
                    <th scope="col">คะแนน</th>
                    <th scope="col">ลบข้อมูล</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["id_form"]; ?></td>
                        <td><?php echo $row["sum"]; ?></td>
                 
                        <td>
                            <a href="deletedataform.php?idf=<?php echo $row["id_form"];?>"class="btn btn-danger mt-3">ลบข้อมูล</a>
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