<?php
include('server.php');




if(isset($_POST["delete_member"])){
$d_member = $_POST["id_member"];
$d_username = $_POST["username"];
$d_email = $_POST["email"];
$d_password = $_POST["password"];
$d_urole = $_POST["urole"];
$delete="DELETE FROM tb_member WHERE id_member='$d_member'";
$sql=mysqli_query($con,$delete);

if($sql){
    header('location : admin.php');
}else{
    header('location : admin.php');
}
}

else if(isset($_POST["add_member"])){
    $i_member = $_POST["id_member"];
    $i_username = $_POST["username"];
    $i_email = $_POST["email"];
    $i_password = $_POST["password"];
    $i_urole = $_POST["urole"];
    $add = "INSERT INTO tb_member(username, email, password) VALUE ('$i_username','$i_email','$i_password')";
    // $sql = mysqli_query($con,$add);
    $sql = mysqli_query($con,$add);
    if($sql){
        header('location : admin.php');
    }else{
        header('location : admin.php');
    }
    }

    else if(isset($_POST["edit_member"])){
        $id = $_POST["id_member"];
        $u_member = $_POST["id_member"];
        $u_username = $_POST["username"];
        $u_email = $_POST["email"];
        $u_password = $_POST["password"];
        $u_urole = $_POST["urole"];
        $update = "UPDATE tb_member SET username = '$u_username', password = '$u_password', email = '$u_email' WHERE id_member ='$id'";
        $sql = mysqli_query($con,$update);
    
        
    
        if($u_username){
            $update = "UPDATE tb_member SET username = '$u_username' WHERE id_member ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }
        
        if($u_email){
            $update = "UPDATE tb_member SET email = '$u_email' WHERE id_member ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }

        if($u_password){
            $update = "UPDATE tb_member SET password = '$u_password' WHERE id_member ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }

        if($u_urole){
            $update = "UPDATE tb_member SET urole = '$u_urole' WHERE id_member ='$id'";
            $sql = mysqli_query($con,$update);
            header('location : admin.php');
        }
    

    }
    else if(isset($_GET["idm"])){
    $id = $_GET["idm"];
    $delete="DELETE FROM tb_member WHERE id_member='$id'";
    $sql=mysqli_query($con,$delete);
    if($sql){
        header('location : admin.php');
    }else{
        header('location : admin.php');
    }
}else if (isset($_POST["sort"])) {
    $sql="SELECT * FROM tb_wb GROUP BY  id_wb DESC";
    $query = mysqli_query($con,$sql);
    header('location : admin.php');

}
