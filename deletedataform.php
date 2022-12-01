<?php
include('server.php');
$id = $_GET["idf"];
$delete="DELETE FROM tb_forms WHERE id_form='$id'";

$sql=mysqli_query($con,$delete);

if($sql){
    header('location : admin.php');
}else{
    header('location : admin.php');
}
?>