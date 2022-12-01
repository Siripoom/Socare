

<?php
session_start();


if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
<p class="h3 mt-3 text-center ">Dashboard</p>

  <span class="navbar-text text-center ">
            <?php if(isset($_SESSION['success'])) : ?>
                <div class="success">
                    <?php 
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                    ?></div>
                <?php endif ?>
                <?php if(isset($_SESSION['username'])) : ?> 
                    <p class="h3"><strong><?php echo $_SESSION['username'];?></strong></p>
                <?php endif ?>
        </span>

  <a href="profile.php">ข้อมูลทั่วไป</a>
  <a href="p_katoo.php">กระทู้</a>
  <a href="order_list.php">รายการสั่งซื้อ</a>


        <span class="navbar-text">
            <?php if(isset($_SESSION['username'])) : ?>
                <a href="index.php?logout='1'" style="color: white;" class="btn btn-danger btn-sm mx-2 mb-3">logout</a>
                <?php endif ?>
        </span>


</div>



</body>


</html>
