<meta charset="utf-8">
<?php
  include '../connect.php';
  $Committee_id=$_GET['Committee_id'];
  $sql="DELETE FROM committee WHERE Committee_id='$Committee_id'";

  if($connect->query($sql)){
    echo "<script>
          alert('ลบข้อมูลสำเร็จ');
          window.location.href='committee.php'</script>";
  }else{
    echo "<script>
            alert('ไม่สามรถลบข้อมูลได้');
            window.location.href='committee.php';
            </script>";
  }

?>
