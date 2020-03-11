<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
 <?php
   include 'connect.php';
   include 'navbar0.php';
   date_default_timezone_set("Asia/Bangkok");
  $sql="SELECT * FROM `maten`";
  $result=$connect->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  </head>
  <body>
    <div style="margin-top:25px;" class="container">
        <input id="non-printable" class="btn btn-primary" onclick="javascript:window.print()" type="button" value="คลิ๊กเพื่อ Print หน้านี้" name="print2">
    <h4 id="printable" align="center">รายงานการผลการแข่งขัน</h4>
    <table class="table table-striped">
      <thead>
      <tr>
      <td scope="col">วันที่แข่งขัน</td>
      <td scope="col">เวลาเริ่มแข่งขัน</td>
      <td scope="col">เวลาสิ้นสุด</td>
      <td scope="col">ชื่อทีม</td>
      <td scope="col">คะแนน</td>
      <td scope="col">ผลการแข่งขัน</td>
    </tr>
  </thead>
        <tbody>
      <?php while ($row=mysqli_fetch_array($result)){
        $sq = $row['Match_id'];
        // echo "<script>alert($sq);</script>";?>
        <tr>
          <td><?php echo $row['_Date']?></td>
          <td><?php echo $row['Time_start']?></td>
          <td><?php echo $row['Time_end'];?></td>
            <td><?php echo $row['Team_id'];?></td>
          <?php
            $srr = $connect->query("SELECT * FROM candidate_team ct,maten m WHERE ct.Match_id = m.Match_id AND m.Match_id =  '$sq'");
            while ($row1 = mysqli_fetch_array($srr)) {
           ?>
          <td><?php echo $row1['Score'];?></td>
          <td><?php echo $row1['Score_line'];?></td>
        <?php } ?>
      <?php } ?>
    </tbody>
    </table>
  </div>
  </body>
</html>
