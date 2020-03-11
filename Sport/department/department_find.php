<style>
body {
    background-image: url("../img/sport1.png");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Prompt', sans-serif;
    z-index: 1;
    }
</style>
<?php SESSION_Start();
$find = $_POST['find'];
?>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<body style="font-family: 'Athiti', sans-serif;  background-color: #5c9dc0;">
<?php include "navbar.php";  ?>
<?php include "../connect.php";  ?>
<br>
  <div class="container" style="border:1px white solid; width:1700px; height: 600px;  background-color:white; opacity:1.5;">
<div style="font-size:30px; text-align:center;">จัดการข้อมูลแผนก</div>
<br>
<div class="form-group row" style="margin-left:250px;">
    <label for="inputPassword" ><b>ค้นหาข้อมูลแผนก<h8 style="color: #FF0000">(ค้นหารหัสหน่วยกีฬา)</h8></b></label>
    <form action="department_find.php" enctype="multipart/form-data" method="post">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="find" name="find" value="<?php echo $find; ?>">
    </div>
    <div style="margin-left:300px; margin-top:-36px;">
        <button type="submit" class="btn btn-info">ค้นหา</button>
    </div>
  </form>
  </div>

  <a href="department_add.php"><button type="button" class="btn btn-success" style="margin-left:80px;" >+เพิ่มแผนก</button></a>

  <div class="col-lg-4" style="margin-left:1000px; margin-top:-30px;">
    <a href="department.php"><button type="submit" name="submit" class="btn btn-danger" style="color:#fff;">ย้อนกลับ</button></a>
  </div>
<br>
<center><table class="table table-danger table-info" style="text-align:center; width:80%">
<tr>
  <td><B>ลำดับที่</td></B>
  <td><B>รหัสแผนก</td></B>
  <td><B>ชื่อแผนก</td></B>
  <td><B>รหัสหน่วยกีฬา</td></B>
  <td><B>จัดการ</td></B>
</tr>
<?php
$sql = "SELECT * FROM department WHERE Dep_id = '$find' or Dep_name = '$find'  or Unit_number = '$find'";
$query = $connect->query($sql);
  $i=1;
  while($row = $query->fetch_assoc()){
?>
<tr>
  <td><?php echo $i ?></td>
  <td><?php echo $row['Dep_id'] ?></td>
  <td><?php echo $row['Dep_name'] ?></td>
  <td><?php echo $row['Unit_number'] ?></td>

  <td align="center"><a href="department_delete.php?dep_id=<?=$row['dep_id']?>" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่ ?')" style="text-decoration:none;color:red">[ลบ]</a>
                                     <a href="department_edit.php?dep_id=<?php echo $row['dep_id']?>" style="text-decoration:none;color:blue">[แก้ไข]</a></td>
</tr>
<?php
$i++;
}
?>

</table>
</div>
