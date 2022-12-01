<?php
include('server.php');



if(isset($_POST["delete_contact"])){
$d_contact = $_POST["id_contact"];
$d_name = $_POST["name"];
$d_email = $_POST["email"];
$d_tell = $_POST["tell"];
$d_title = $_POST["title"];
$d_text = $_POST["text"];
$delete="DELETE FROM tb_contact WHERE id_contact='$d_contact'";
$sql=mysqli_query($con,$delete);

if($sql){
    header('location : admin.php');
}else{
    header('location : admin.php');
}
}

else if(isset($_POST["add_contact"])){
    $d_contact = $_POST["id_contact"];
    $d_name = $_POST["name"];
    $d_email = $_POST["email"];
    $d_tell = $_POST["tell"];
    $d_title = $_POST["title"];
    $d_text = $_POST["text"];
    $add = "INSERT INTO tb_contact(name, email, title,tell,text) VALUE ('$d_name','$d_email','$d_tell','$d_title','$d_text')";
    // $sql = mysqli_query($con,$add);
    $sql = mysqli_query($con,$add);
    if($sql){
        header('location : admin.php');
    }else{
        header('location : admin.php');
    }
    }

    else if(isset($_POST["edit_contact"])){
    $d_contact = $_POST["id_contact"];
    $d_name = $_POST["name"];
    $d_email = $_POST["email"];
    $d_tell = $_POST["tell"];
    $d_title = $_POST["title"];
    $d_text = $_POST["text"];
        $update = "UPDATE tb_contact SET name = '$d_name', email = '$d_email', tell = '$d_tell', title = '$d_title', text = '$d_text' WHERE id_contact ='$d_contact'";
        // $sql = mysqli_query($con,$add);
    
    
        if($d_name){
            $update = "UPDATE tb_contact SET name = '$d_name' WHERE id_contact ='$d_contact'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }
        
        if($d_email){
            $update = "UPDATE tb_contact SET email = '$d_email' WHERE id_contact ='$d_contact'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }

        if($d_tell){
            $update = "UPDATE tb_contact SET tell = '$d_tell' WHERE id_contact ='$d_contact'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }

        if($d_title){
            $update = "UPDATE tb_contact SET title = '$d_title' WHERE id_contact ='$d_contact'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }

        if($d_text){
            $update = "UPDATE tb_contact SET text = '$d_text' WHERE id_contact ='$d_contact'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }
    

    }
    else if(isset($_GET["idm"])){
    $id = $_GET["idm"];
    $delete="DELETE FROM tb_contact WHERE id_contact='$id'";
    $sql=mysqli_query($con,$delete);
    if($sql){
        header('location : admin.php');
    }else{
        header('location : admin.php');
    }
}




















$id = $_GET["idc"];
$delete="DELETE FROM tb_contact WHERE id_contact='$id'";

$sql=mysqli_query($con,$delete);

if($sql){
    header('location : admin.php');
}else{
    header('location : admin.php');
}
