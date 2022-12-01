<?php
include('server.php');



$sql = "SELECT * FROM tb_wb WHERE categories = 'al_shy' GROUP BY  id_wb DESC";
$query = mysqli_query($con, $sql);

// $ea = "SELECT * FROM tb_wb WHERE categories = 'ache' GROUP BY  id_wb DESC";
// $eaq = mysqli_query($con, $ea);


$row = mysqli_fetch_assoc($query);
// $rows = mysqli_fetch_assoc($eaq);

?>
<!DOCTYPE html>
<html lang="en">
<title>หมวดหมู่ ชุมชน</title>
<style>
    a {
        color: black;
        text-decoration: none;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">ประชาสัมพัธ์</h1>
            <div class="col shadow p-3 mb-4 bg-body rounded mt-3">
                <span class="d-block p-2 bg-success text-white h2">โรคความจำเสื่อม</span>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>หัวข้อ</th>
                            <th>สร้างโดย</th>
                            <th>หมวดหมู่</th>
                            <th>วันสร้าง</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <a href="katoo.php?id=<?php echo $row["id_wb"] ?>">
                                    <p class="fw-bold"><?php echo $row["title_wb"]; ?></p>
                                </a>
                            </td>
                            <td>
                                <?php echo $row["name_wb"]; ?>
                            </td>
                            <td>
                                <?php echo $row["categories"]; ?>
                            </td>
                            <td>
                                <?php echo $row["wb_date"]; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-primary">เพิ่มเติม</a>


            </div>
        </div>
    </div>
</body>


</html>