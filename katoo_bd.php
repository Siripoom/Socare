<?php

    include('server.php'); //Connect server
    session_start(); // start session เพื่อใช้งานตัวแปรแบบ  Global variable ตัวแปปชนิดนี้สามารถส่งค่าข้าม page ได้

   
    $comment = $_POST["comment"];   //รับค่าเก็บลงตัวแปร ส่งค่ามาแบบไหนรับค่าแบบนั้น ในกรณีนี้ส่งค่ามาแบบ POST(post คือการส่งแบบมีค่ามา) จึงรับแบบโพส


    //สี่บรรทัดล่างต่อไปนี้ มีจุดประสงค์ในการดึง ID ของสมาชิก จากตาราง tb_member มาใช้
    $iduser = "SELECT * FROM tb_member WHERE username = '$_SESSION[username]'"; //เนื่องจากเรามีการเก็บ username ลงในตัวแปร session(อ่านได้ที่บรรทัดที่ 4)  
    $idquery = mysqli_query($con,$iduser);
    $iduser = mysqli_fetch_assoc($idquery);
    
    $id=$iduser["id_member"];

    $idkatoo = $_SESSION['idkatoo'];
   // $insert = "INSERT INTO tb_wb(rp_contain, rp_by, rp_topic)VALUE('comment', '$_SESSION[username]', '$idkatoo')";


//    $insert = "INSERT INTO tb_wb(rp_comment, rp_by, rp_topic)VALUE('$comment', '$id', '$idkatoo')";
//    $query = mysqli_query($con,$insert);

    $insert = "INSERT INTO tb_replie(rp_comment, rp_by, rp_topic) VALUE ('$comment', '$id', '$idkatoo')";
    $query = mysqli_query($con,$insert);

   if($query){
    header('location: community_page.php');
   }else{
    echo "error" ;
   }
    
        //echo $comment; //ค่า่ออก
        //echo $idkatoo; //ค่าออก
        //echo $id;   //ค่าออก
    


?>
