<meta charset="utf-8">
<?php
  include '../connect.php';
  $Dep_id=$_GET['Dep_id'];
  $sql="DELETE FROM department WHERE Dep_id='$Dep_id'";

  if($connect->query($sql)){
    echo "<script>
          alert('ลบข้อมูลสำเร็จ');
          window.location.href='department.php'</script>";
  }else{
    echo "<script>
            alert('ไม่สามรถลบข้อมูลได้');
            window.location.href='department.php';
            </script>";
  }

?>
