<?php
include('menu.php');
include('server.php');

$_SESSION['idkatoo'] = $_GET["id"];

$sql = "SELECT * FROM tb_wb WHERE id_wb = '$_SESSION[idkatoo]'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

$select = "SELECT * FROM tb_replie WHERE rp_topic = '$_SESSION[idkatoo]'";
$querys = mysqli_query($con, $select);



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Katoo</title>

</head>

<body>
    <div class="container mt-3">
        <div class="row ">

            <div class="col">
                <div class="row">

                    <div class="border border-success rounded">
                        <label class="fs-4"><strong>หัวข้อ: <?php echo $row["title_wb"] ?> | โดย <?php echo $row["name_wb"] ?> </strong></label>
                        <br>
                        <label class="my-2"><strong>รายละเอียด : <?php echo $row["text_wb"] ?> </strong></label>
                        <br>
                        <label class="text"><strong>หมวดหมู่ : <?php echo $row["categories"] ?> </strong></label>
                    </div>

                </div>
                
                <div class="row mt-2">
                    <div class="border border-success rounded">
                        <label class="fs-4 mt-3 my-2"><strong>แสดงความคิดเห็น</strong></label>
                        <form action="katoo_bd.php" method="post">
                            <div class="input-group">
                                <textarea class="form-control" style="width: 1250px;" name="comment"></textarea>
                                <button class="btn btn-success my-2" name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <?php while ($reply = mysqli_fetch_assoc($querys)) { ?>
                <div class="row mt-2">
                    <div class="border border-success rounded">
                            <p class="mt-2"><?php echo $reply["rp_comment"]; ?> </p>
                            <p><?php echo $reply["rp_date"]; ?> </p>
                    </div>
                </div>
                <?php } ?>
                
            </div>


        </div>
    </div>
    </div>




</body>
<?php include('footer.php') ?>

</html>