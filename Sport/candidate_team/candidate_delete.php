<meta charset="utf-8">
<?php
  include '../connect.php';
  $Match_id=$_GET['Match_id'];
  $sql="DELETE FROM candidate_team WHERE Match_id='$Match_id'";

  if($connect->query($sql)){
    echo "<script>
          alert('ลบข้อมูลสำเร็จ');
          window.location.href='candidate.php'</script>";
  }else{
    echo "<script>
            alert('ไม่สามรถลบข้อมูลได้');
            window.location.href='candidate.php';
            </script>";
  }

?>
