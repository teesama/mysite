
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
<meta charset="utf-8">
<?php SESSION_Start();
require_once '../connect.php';

if(isset($_POST['add'])){
							$Dep_id = $_POST['Dep_id'];
							$Dep_name = $_POST['Dep_name'];
							$Unit_number= $_POST['Unit_number'];
							$count=0;
							$sqlVal ="select Dep_id from department where Dep_id='$Dep_id'";
							$resultVal = $connect->query($sqlVal);
							while ($row=mysqli_fetch_array($resultVal)) {
							$count++;
						}
						if($count>0){
                            echo "<script>alert('ไอดีนี้มีอยู่แล้ว')</script>";
                            }else {
								if($Dep_id != ""&&$Dep_name != ""&&$Unit_number != ""){
									 $sql = "INSERT INTO department (Dep_id,Dep_name,Unit_number)
                  VALUES ('$Dep_id','$Dep_name','$Unit_number')";
									$result = $connect->query($sql);
								if($result){
									echo "<script>alert('เพิ่มข้อมูลสำเร็จ')</script>";
									echo "<script>window.location.href='department.php';</script>";
								}else {
									echo "<script>alert('เพิ่มข้อมูลล้มเหลว')</script>";
									echo "<script>window.location.href='department.php';</script>";
									  }
								}else{
									echo "<script>alert('กรุณากรอกข้อมูลให้ครบ !')</script>";
								}
									};
                                }

if(isset($_POST['btnSubmitEmp'])){
  $file = $_FILES['fileCSV']['tmp_name'];
  $handle = fopen($file,"r");
  while(($fileop = fgetcsv($handle,1000,",")) !== false)
      {
          $Dep_id= $fileop[0];
          $Dep_name= $fileop[1];
          $level_name= $fileop[3];
          $sql = ("INSERT INTO department (Dep_id,Dep_name,Unit_number) VALUES ('$Dep_id','$Dep_name','$Unit_number')");
          if($connect->query($sql)){
          echo "<script>alert('เพิ่มข้อมูลของสำเร็จแล้ว');
          window.location.href='department.php';
          </script>";
          }else {
          echo "<script>
          alert('ERROR : ไม่สามารถบันทึกข้อมูลได๋');
          window.history.back();
          </script>";
          }

      }
    }
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
<body style="font-family: 'Athiti', sans-serif;">
<?php include "navbar.php";  ?>
<style>
body  {
width:100%;
height: 100%;
background-color: #5c9dc0;
}
</style>
  <div class="container" style="border:1px white solid; width:1700px; height: 600px;  background-color:white; opacity:1.5;">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>

</div>

<div class="container" style="width:700px;margin-top:40px;   ">
	<div class="card">
			<div class="card-header   text-center"><h5 style="color: #5c9dc0">เพิ่มข้อมูลแผนก</h5></div>
				<div class="card-body" style="background-color: #F5FFFA">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
		<div class="form-group row">
				<label class="col-lg-4 col-form-label">รหัสแผนก: </label>
						<div class="col-lg-7">
								<input type="text" class="form-control"  name="Dep_id" placeholder="กรุณาใส่รหัสแผนก">
						</div>
		</div>

		 <div class="row">
		      <label class="col-lg-4 col-form-label">แผนกวิชา: </label>
		            	<div class="col">
											<input type="text" class="form-control"  name="Dep_name" placeholder="กรุณาใส่ชื่อแผนก">

		              </div>
		</div>

		<div class="row">
				 <label class="col-lg-4 col-form-label" style="margin-top:10px;">หน่วยกีฬา: </label>
								 <div class="col">
									 <select class="custom-select" id="inlineFormCustomSelectPref" style="margin-left:-1px; margin-top:15px;width:200px;" name="Unit_number">
                        <option>--เลือกหน่วยกีฬา--</option>
                     <?php
											 $sql = "SELECT * FROM sport_unit";
											 $query = $connect->query($sql);
											 while ($row2 = mysqli_fetch_array($query)) {
												 ?>
												 <option value="<?php echo $row2['Unit_number']; ?>"><?php echo $row2['Unit_number']; ?></option>
												 <?php
											 }
											?>
										 </select>
	 </div>
</div>







                        <br>
                        <div class="form-group row">
                            <div class="col-lg-6" style="text-align: right">
                                <input type="submit" class="btn btn-success col-4" name="add" value="ตกลง">
                            </div>
                            <div class="col-lg-6" style="text-align: left">
  <a  class="btn btn-danger col-4"  href="department.php" style="color:white; text-decoration-line: none;">ยกเลิก</a>
                            </div>
                        </div>
                    </form>

                </div>

<br>       </div>
</div></div>
