<meta charset="utf-8">
 <html>
<?php
include 'connect.php';
  session_start();
  if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM admin WHERE username='$username'and password='$password'";
  $result = $connect->query($sql);
  $num = mysqli_num_rows($result);
  $cols = mysqli_fetch_array($result);
  if($num==1){
    $_SESSION["username"] = $cols["username"];
    $_SESSION["position"] = $cols["position"];
    $_SESSION["name"] = $cols["name"];
    if($cols['position']==1){
      echo "<script>window.location.href='admin1/index.php'</script>";
       $_SESSION['name'] = $cols['username'];
    }else if($cols['position']==2){

      echo "<script>window.location.href='stocker/index.php'</script>";
    }else if($cols['Position']==3){
        echo "<script>window.location.href='seller/index.php'</script>";

    }else{
      echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";

}

}

}
 ?>

 <style>
body{
	background-image: url("img/sport.jpg");
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
}
</style>
 <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
 <link rel="stylesheet" href="css/mystyle.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="js/jquery-3.2.1.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
  <div style="border-radius: 5px;padding: 25px; margin-top:250px; margin-left:700px; width: 500px; background:lightblue;">
    <form action="check_login.php" method="post">
  <div class="form-group">
    <h4 style="text-align:center;">เข้าสู่ระบบ</h4>
    <div class="form-group row">
  <label for="inputEmail3" class="col-sm-3 col-form-label">ชื่อผู้ใช้ :</label>
  <div class="col-sm-9">
    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="ชื่อผู้ใช้">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputPassword3" class="col-sm-3 col-form-label">รหัสผ่าน :</label>
  <div class="col-sm-9"><center>
  <input type="password" name="password" class="form-control" id="password" placeholder="รหัสผ่าน">
  </div>

  </div>
  <a style="float:right;" class="btn btn-danger"  href="index.php">ย้อนกลับ</a>&nbsp;
  <button style="float:right;" type="submit" class="btn btn-primary";>เข้าสู่ระบบ</button>&nbsp;
    </form>
  </div>
  <div>
  </body>
</html>
