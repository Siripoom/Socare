<br><p class="h2">
<?php
    include('server.php');
    include('menu.php');

    $name = $_POST["name"];
    $email =$_POST["email"];
    $tell = $_POST["tell"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    // $sql="INSERT INTO contact(name,c_email,tell,title,c_text) VALUE ('$name','$email','$tell','$title,'$text')";
    // $result= mysqli_query($con, $sql);
    $sql="INSERT INTO tb_contact(name,email,tell,title,text) VALUE ('$name','$email','$tell','$title','$text')";
    $result= mysqli_query($con,$sql);
        // echo $sql;

    if($result){
        echo "ส่งแบบฟอร์มติดต่อสำเร็จ "; 
    }else{
        echo"ผิดพลาด";
    }

?></p>
<a href="contact.php" class="btn btn-primary">ย้อนกลับ</a>
<?php include('footer.php'); ?>