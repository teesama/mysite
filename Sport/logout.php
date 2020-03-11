  <meta charset="utf-8">
<?php
  session_start();
  session_destroy();
  echo "<script>alert('ออกจากระบบเสร็จสิ้น');</script>";
  echo "<script>window.location.href='login.php'</script>";
?>
