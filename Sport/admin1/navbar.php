<meta charset="utf-8">
<?php session_start(); ?>

<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="js/jquery-3.2.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
  .btnn{
    background: #ccc;
    color:black;
    border-radius:30px;
  }
  .btnn:hover{
    color: white;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
   <img src="../img/logo.gif" width="50" height="40" alt="">
 </a>
  <a class="navbar-brand" href="index.php">ระบบเก็บผลการแข่งขันกีฬาภายในวิทยาลัยเทคนิคสัตหีบ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
  <ul>
</ul></div>
  <ul class="nav justify-content-end">
     <img src="../img/round.png" width="50" height="40" alt="">
    <li class="nav-item">
    <a class="nav-link" href="#" style="color:white;"><?php echo $_SESSION['name']; ?></a>
  </li>
  <ul class="nav justify-content-end">
    <li class="nav-item">
  <a class="nav-link btnn" href="../logout.php">logout</a>
</li>
</ul>
</ul>

</div>
</nav>
<body class="body">
