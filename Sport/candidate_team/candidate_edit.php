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
$sql="SELECT * FROM candidate_team WHERE Match_id = '".$_GET["Match_id"]."' ";
  $result=$connect->query($sql);
	$show=mysqli_fetch_array($result);
  $Match_id = $show['Match_id'];
		if(isset($_POST['save'])){
			$Match_id = $_POST['Match_id'];
			$Team_id = $_POST['Team_id'];
			$Score = $_POST['Score'];
    	$Annotation = $_POST['Annotation'];

		          $sql = "UPDATE candidate_team SET Match_id = '$Match_id',Team_id = '$Team_id',Score = '$Score',Annotation='$Annotation' WHERE Match_id = '".$_GET["Match_id"]."'";
		          $query = $connect->query($sql);
		            if($query == TRUE  ){
		              echo "<script language=\"JavaScript\">";
		              echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว')";
		              echo "</script>";
		              echo '<meta http-equiv=refresh content=0;URL=candidate.php>';
		            }else{
		              echo "<script language=\"JavaScript\">";
		              echo "alert('การแก้ไขผิดพลาดกรุณาตรวจสอบข้อมูลอีกครั้ง')";
		              echo "</script>";
		              echo '<meta http-equiv=refresh content=0;URL=candidate.php>';
		            }
		        };



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
  <div class="container" style="border:1px white solid; width:1700px; height: 700px;  background-color:white; opacity:1.5;">
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
                <div class="card-header   text-center"><h5 style="color: #5c9dc0">แก้ไขข้อมูลของ <?php echo $show['Match_id'];?></h5></div>
                		<div class="card-body" style="background-color: #F5FFFA">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">

                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label">รหัสตารางการแข่งขัน : </label>
                              <div class="col-lg-7">
                                <select class="custom-select" id="inlineFormCustomSelectPref" style="margin-left:15px; width:200px;" name="Match_id">
                                  <?php
                                                                  $sql = "SELECT * FROM maten";
                                                                    $query = $connect->query($sql);
                                                                    while ($row2 = mysqli_fetch_array($query)) {
                                                                      ?>
                                                                      <option value="<?php echo $row2['Match_id']; ?>" <?php if($show['Match_id']==$row2['Match_id']){echo "selected";}else {

                                                                      } ?>><?php echo $row2['Match_id']; ?></option>
                                                                      <?php
                                                                    }
                                                                    ?>
                                                     </select></div></div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">รหัสทีม : </label>
                                <div class="col-lg-7">
                                  <select class="custom-select" id="inlineFormCustomSelectPref" style="margin-left:15px; width:200px;" name="Team_id">
                                    <?php
                                                                    $sql = "SELECT * FROM team";
                                                                      $query = $connect->query($sql);
                                                                      while ($row2 = mysqli_fetch_array($query)) {
                                                                        ?>
                                                                        <option value="<?php echo $row2['Team_id']; ?>" <?php if($show['Team_id']==$row2['Team_id']){echo "selected";}else {

                                                                        } ?>><?php echo $row2['Team_name']; ?></option>
                                                                        <?php
                                                                      }
                                                                      ?>
                                                       </select></div></div>
                              <div class="form-group row" style="margin-top:16px; margin-left:-20px;">
                                                                <label class="col-lg-4 col-form-label">คะแนน : </label>
                                              <input type="text" class="form-control"  name="Score" value="<?php echo $show['Score'];?>"  style="margin-top:-40px;margin-left:160px;">
                                    </div>
<br>
<div class="form-group row" style="margin-top:16px; margin-left:-20px;">
                                  <label class="col-lg-4 col-form-label">หมายเหตุ : </label>
                <input type="text" class="form-control"  name="Annotation" value="<?php echo $show['Annotation'];?>"  style="margin-top:-40px;margin-left:160px;">
      </div>
<br>

                        <div class="form-group row" >
                            <div class="col-lg-6" style="text-align: right">
                                <input type="submit" class="btn btn-success col-4" name="save" value="ตกลง">
                            </div>
                            <div class="col-lg-6" style="text-align: left">
  <a  class="btn btn-danger col-4"  href="candidate.php" style="color:white; text-decoration-line: none;">ยกเลิก</a>                                </div></div></div>
                    </form>
                </div>
            </div>
<br><br>        </div></div></div></div>
