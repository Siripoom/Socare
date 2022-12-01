<?php
include('server.php');
session_start();



if(isset($_POST["delete"])){
$d_id = $_POST["id_katoo"];
$d_title = $_POST["title"];
$d_text = $_POST["text"];

$delete="DELETE FROM tb_wb WHERE id_wb='$d_id'";
$sql=mysqli_query($con,$delete);

if($sql){
    header('location : p_katoo.php');
}else{
    header('location : p_katoo.php');
}
}

else if(isset($_POST["create"])){
    $title = $_POST["title"];
    $text = $_POST["text"];
    $name = $_SESSION['username'];
    $add = "INSERT INTO tb_wb (name_wb,title_wb, text_wb) VALUE ('$name','$title','$text')";
    $sql = mysqli_query($con,$add);
    if($sql){
        header('location : p_katoo.php');
    }else{
        header('location : p_katoo.php');
    }
    }

    else if(isset($_POST["update"])){
        $id = $_POST["id_katoo"];
        $u_title = $_POST["title"];
        $u_text = $_POST["text"];
        $update = "UPDATE tb_wb SET title_wb = '$u_title', text_wb = '$u_text' WHERE id_wb ='$id'";
        $sql = mysqli_query($con,$update);
    
        
    
        if($u_title){
            $update = "UPDATE tb_wb SET title_wb = '$u_title' WHERE id_wb ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : p_katoo.php');
        }
        
        if($u_text){
            $update = "UPDATE tb_wb SET text_wb = '$u_text' WHERE id_wb ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : p_katoo.php');
        }

    }

    else if(isset($_GET["idm"])){
    $id = $_GET["idm"];
    $delete="DELETE FROM tb_wb WHERE id_wb='$id'";
    $sql=mysqli_query($con,$delete);
    if($sql){
        header('location : p_katoo.php');
    }else{
        header('location : p_katoo.php');
    }

}
