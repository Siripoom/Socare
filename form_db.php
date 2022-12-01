<br><p class="h2">
<?php
    include('server.php');
    include('menu.php');

    $total = array($_POST['s01'],$_POST['s02'],$_POST['s03'],$_POST['s04'],$_POST['s05']);
    $sum= $total[0]+$total[1]+$total[2]+$total[3]+$total[4];

    $sql="INSERT INTO tb_forms(sum) VALUE ($sum)";
    $result= mysqli_query($con,$sql);

    if($result){
        echo "คุณได้คะแนนเท่ากับ = ".$sum; 
    }else{
        echo"กรุณาลองใหม่อีกครั้ง";
        header("location: test.php");
    }
?>
<div></div>
<?php
 if($sum<=5){
        echo"ยังปกติดีหรือมีความเสี่ยงน้อยมาก";
    }
    else if($sum<=10){
        echo"มีความเสี่ยงปานกลางที่จะเป็นโรคอัลไซเมอร์";
    }
    else if($sum<=15){
        echo"มีความเสี่ยงสูงที่จะเป็นโรคอัลไซเมอร์";
    }
    else if($sum<=20){
        echo"มีอาการของโรคอัลไซเมอร์ขั้นรุนแรง!!ควรพบแพทย์ด่วน";
    }
    
?>
</p>
<a href="form.php" class="btn btn-primary">ย้อนกลับ</a>
</div>  
<?php include('footer.php')?>

