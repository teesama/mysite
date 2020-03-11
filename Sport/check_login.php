<?php
session_start();
	require_once 'connect.php';
	$username=$_POST['username'];
  $password=$_POST['password'];
	$sql = "SELECT * FROM admin  WHERE username = '$username'and password = '$password'";
	$result=$connect->query($sql);
	$num=mysqli_num_rows($result);
	$cols = mysqli_fetch_array($result);
	if($num==1){
			$_SESSION["name"] = $cols["username"];
			echo "<script>window.location.href='admin1/index.php'</script>";

	}else {

	 echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');window.history.back();</script>";
	}
?>
